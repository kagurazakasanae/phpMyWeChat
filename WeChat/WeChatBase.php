<?php
use Mdanter\Ecc\EccFactory;
use Mdanter\Ecc\Primitives\GeneratorPoint;
use Mdanter\Ecc\Serializer\PrivateKey\DerPrivateKeySerializer;
use Mdanter\Ecc\Serializer\PublicKey\DerPublicKeySerializer;
use Mdanter\Ecc\Util\NumberSize;

require_once 'ByteArray.php';
require_once "WeChatUtils.php";

class WeChatBase{
	//Consts for WeChat Proto
	private $shortConnectionURL = 'http://szshort.weixin.qq.com';
	private $clientVersion = 0x17000523;	//0x17000523 705 0x17000428 704
	private $RSAVer = 174;	//RSA私钥版本
	private $RSAKey = "D153E8A2B314D2110250A0A550DDACDCD77F5801F3D1CC21CB1B477E4F2DE8697D40F10265D066BE8200876BB7135EDC74CDBC7C4428064E0CDCBE1B6B92D93CEAD69EC27126DEBDE564AAE1519ACA836AA70487346C85931273E3AA9D24A721D0B854A7FCB9DED49EE03A44C189124FBEB8B17BB1DBE47A534637777D33EEC88802CD56D0C7683A796027474FEBF237FA5BF85C044ADC63885A70388CD3696D1F2E466EB6666EC8EFE1F91BC9353F8F0EAC67CC7B3281F819A17501E15D03291A2A189F6A35592130DE2FE5ED8E3ED59F65C488391E2D9557748D4065D00CBEA74EB8CA19867C65B3E57237BAA8BF0C0F79EBFC72E78AC29621C8AD61A2B79B";	//RSA私钥
	//Ends of Consts
	
	//Useful Vars
	private $config;
	private $utils;
	private $defs;
	private $endPoints;
	//Ends of Vars
	
	public function __construct(){
		//Construct
		$this -> defs = require('WeChatProtoDefs.php');
		$this -> endPoints = require('WeChatEndPoints.php');

		$this -> config = require("Config.php");
		$fileList = scandir(__DIR__ . '/Protobuf');
		foreach ($fileList as $filename){
			if(substr($filename, -4) == ".php"){
				require_once __DIR__ . '/Protobuf/' . $filename;
			}
		}
	}
	//RSA encrypt provided data, PKCS1 padding
	private function encrypt_RSA($data){
		$rsa =  new \phpseclib\Crypt\RSA();
		$rsa->loadKey(
			array(
				'e' => new \phpseclib\Math\BigInteger('10001', 16),
				'n' => new \phpseclib\Math\BigInteger($this -> RSAKey, 16)
			)
		);
		$rsa -> setEncryptionMode($rsa::ENCRYPTION_PKCS1);
		return $rsa -> encrypt($data);
	}
	//AES decrypt WeChat protocol use AES-128-CBC iv=key
	private function decrypt_AES($data, $key){
		$aes = new \phpseclib\Crypt\AES();
		$aes -> setKey($key);
		$aes -> setIV($key);
		return $aes -> decrypt($data);
	}
	//AES encrypt WeChat protocol use AES-128-CBC iv=key
	private function encrypt_AES($data, $key){
		$aes = new \phpseclib\Crypt\AES();
		$aes -> setKey($key);
		$aes -> setIV($key);
		return $aes -> encrypt($data);
	}
	//Geneator a key pair for WeChat key exchange, secp224r1 curve
	private function EcDH_genKeyPair(){
		$adapter = EccFactory::getAdapter();
		$generator = EccFactory::getNistCurves() -> generator224();
		$private = $generator -> createPrivateKey();
		$derSerializer = new DerPrivateKeySerializer($adapter);
		$der = $derSerializer -> serialize($private);
		$prv = Sop\CryptoTypes\Asymmetric\EC\ECPrivateKey::fromDER($der);
		return array(
			'privateKey' => $der,
			'privateKeyRAW' => $prv -> privateKeyOctets(),
			'publicKeyRAW' => $prv -> publicKey() -> ECPoint()
		);
	}
	//EcDH 计算共享密钥
	private function EcDH_calcKey($privateKey, $publicKeyRAW){
		$publicKey = new Sop\CryptoTypes\Asymmetric\EC\ECPublicKey($publicKeyRAW, '1.3.132.0.33');	//1.3.132.0.33: OID of secp224r1 algo
		$publicKey = $publicKey -> publicKeyInfo() -> toDER();
		$derPub = new DerPublicKeySerializer();
		$publicKey = $derPub -> parse($publicKey);
		$derPrv = new DerPrivateKeySerializer();
		$privateKey = $derPrv -> parse($privateKey);
		$dh = $privateKey -> createExchange($publicKey);
		$shared = $dh -> calculateSharedKey();
		return hex2bin(md5(gmp_export($shared)));
	}
	//decompress zlib data
	private function decompress_Zlib($data){
		return zlib_decode($data);
	}
	//compress zlib data
	private function compress_Zlib($data){
		return zlib_encode($data, ZLIB_ENCODING_DEFLATE);	//Deflate格式
	}
	//baseRequest类 WeChat协议中的一个基类
	private function getBaseRequest($AESKey, $deviceId, $scene = 0, $uin = 0){
		$baseRequest = new BaseRequest();
		$baseRequest -> setClientVersion($this -> clientVersion);
		$baseRequest -> setDevicelId($deviceId);
		$baseRequest -> setScene($scene);
		$baseRequest -> setSessionKey($AESKey);
		$baseRequest -> setOsType($this -> config['osType']);
		$baseRequest -> setUin($uin);
		return $baseRequest;
	}
	//构造数据包
	private function packReq($src, $cgi, $aesKey, $m_uid, $cookie, $encodetypr = 7, $iscookie = false, $isuin = false){
		echo "DEBUG: packReq::src len: " . strlen($src) . " encodetypr: {$encodetypr}\n";
		if($encodetypr == 7){
			$head = $this -> buildPackageHead($cgi, strlen($src), strlen($src), $m_uid, $cookie, $encodetypr, false, $iscookie, $isuin);
			return $head . $this -> encrypt_RSA($src);
		}else if($encodetypr == 5){
			$zipData = $this -> compress_Zlib($src);
			$encryptedData = $this -> encrypt_AES($zipData, $aesKey);
			$head = $this -> buildPackageHead($cgi, strlen($src), strlen($zipData), $m_uid, $cookie, $encodetypr, true, $iscookie, $isuin);
			return $head . $encryptedData;
		}
	}
	//构造数据包头部
	private function buildPackageHead($cgi, $nLenProtobuf, $nLenProtoCompressedbuf, $m_uid, $cookie, $encodetypr = 7, $use_compress = false, $iscookie = false, $isuin = false){
		//var_dump(bin2hex(WeChatUtils::dword2String(0)));die;
		echo 'DEBUG: buildPackageHead: cgi='.$cgi.' nLenProtobuf='.$nLenProtobuf.' nLenProtoCompressedbuf='.$nLenProtoCompressedbuf.' m_uid='.$m_uid."\n";
		$packageHead = new ByteArray();
		$packageHead -> append(191);	//标志位(可忽略该字节) 0xbf
		$packageHead -> append(0);	//最后2bit：02--包体不使用压缩算法;前6bit:包头长度,最后计算  
		$tmp = $encodetypr << 4;	//05:AES加密算法 07:RSA算法
		if($iscookie){
			$tmp += 15;	//0xf:cookie长度(默认使用15字节长的cookie)
		}
		$packageHead -> append($tmp);
		$packageHead -> append(pack("N", $this -> clientVersion), 1);	//客户端版本号 网络字节序 uint
		$dwUin = 0;
		if($isuin){
			$dwUin = $m_uid;
		}
		$packageHead -> append(WeChatUtils::pack_int32be($dwUin), 1);	//uin 网络字节序 int
		if($iscookie){
			if($cookie == null || $cookie == "" || strlen($cookie) < 15){
				for($i=0;$i<15;$i++){
					$packageHead -> append(0);
				}
			}else{
				$packageHead -> append($cookie, 1);	//cookie
			}
		}
		$packageHead -> append(WeChatUtils::dword2String($cgi), 1);	//cgi type
		$packageHead -> append(WeChatUtils::dword2String($nLenProtobuf), 1);	//body proto压缩前长度
		$packageHead -> append(WeChatUtils::dword2String($nLenProtoCompressedbuf), 1);	//body proto压缩后长度
		$packageHead -> append(WeChatUtils::dword2String($this -> RSAVer), 1);	//使用的RSA密钥版本
		//未知神秘参数 三个可变长整数 疑似标记版本 通信包和登录包需使用不同包尾
		if($encodetypr == 7){
			$packageHead -> append(array(0x0d, 0x00, 0x09, 0xff, 0xff, 0xff, 0xff, 0x0f, 0x00));	//登录包
		}else{
			$packageHead -> append(array(0x02, 0x00, 0xe7, 0x8a, 0x81, 0x00));	//通信包
		}
		$use_compress = $use_compress ? 1 : 2;
		$packageHead -> modify(1, (($packageHead -> len() << 2) + $use_compress));	//修改第二字节
		echo "DEBUG: buildPackageHead::packageHead res len: " .$packageHead -> len() . "\n"; 
		return $packageHead -> toStr();
	}
	//解数据包头部
	private function unpackPackageHead($pack){
		$m_uin = 0;
		$cookie = null;
		$nCur = 0;
		$src = new ByteArray($pack);
		if($src -> seek($nCur) == 191){	//第一位0xbf标志位 跳过
			$nCur += 1;
		}
		$nLenHeader = ($src -> seek($nCur)) >> 2;	//解析包头长度(前6bits)
		$bUseCompressed = ((($src -> seek($nCur)) & 0x3) == 1);	//包体是否使用压缩算法:01使用,02不使用 (后2bits)
		$nCur += 1;
		$nDecryptType = ($src -> seek($nCur)) >> 4;	//解密算法(前4 bits)(05:aes / 07:rsa)(仅握手阶段的发包使用rsa公钥加密,由于没有私钥收包一律aes解密)
		$nLenCookie = ($src -> seek($nCur)) & 0xf;	//cookie长度(后4 bits)
		$nCur += 1;
		$serverVersion = unpack("N", $src -> seekBytes($nCur, 4))[1];	//服务器版本 大端序 4字节
		$nCur += 4;
		$m_uin = unpack("N", $src -> seekBytes($nCur, 4))[1];	//uin 大端序 4字节
		$nCur += 4;
		if($nLenCookie > 0 && $nLenCookie <= 15){	//解析cookie 应在0~15字节范围内 否则说明协议更换
			$cookie = $src -> seekBytes($nCur, $nLenCookie);
			$nCur += $nLenCookie;
		}else if($nLenCookie > 15){
			Throw new Exception("WeChat server protocol may be updated");
		}
		//解析三个可变长度整数
		$r = WeChatUtils::decodeVByte32($src -> seekBytes($nCur, 5, 1), 0);	//cgi type
		$cgi = $r[1];
		$nCur += $r[0];
		$r = WeChatUtils::decodeVByte32($src -> seekBytes($nCur, 5, 1), 0);	//解压后protobuf长度
		$m_nLenRespProtobuf = $r[1];
		$nCur += $r[0];
		$r = WeChatUtils::decodeVByte32($src -> seekBytes($nCur, 5, 1), 0);	//压缩后(加密前)的protobuf长度
		$m_nLenRespCompressed = $r[1];
		$nCur += $r[0];
		//后面没有有用的参数了
		//取出包主体
		$body = $src -> seekBytes($nLenHeader, $src -> len() - $nLenHeader);
		return array(
			'uin' => $m_uin,
			'nLenHeader' => $nLenHeader,
			'nLenCookie' => $nLenCookie,
			'bUseCompressed' => $bUseCompressed,
			'serverVersion' => $serverVersion,
			'cookie' => $cookie,
			'cgi' => $cgi,
			'm_nLenRespProtobuf' => $m_nLenRespProtobuf,
			'm_nLenRespCompressed' => $m_nLenRespCompressed,
			'body' => $body
		);
	}
	//处理同步信息的返回包
	private function processSyncResp($cmdCount, $cmdList){
		$cmdId = new SyncCmdID;
		$cmdId = $cmdId -> getEnumValues();
		$infoArray = array();
		for($i=0;$i<$cmdCount;$i++){
			$cmdItem = $cmdList[$i];
			switch($cmdItem -> getCmdid()){
				case $cmdId['CmdInvalid']:
				break;
				case $cmdId['CmdIdModUserInfo']:
					$t = new ModUserInfo();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$tm = WeChatUtils::protobuf2Array($t);
					if(isset($tm['imgBuf'])) $tm['imgBuf'] = 'data:image/jpeg;base64,' . base64_encode($tm['imgBuf']);
					$infoArray['CmdIdModUserInfo'][] = $tm;
				break;
				case $cmdId['CmdIdModContact']:
					$t = new ModContact();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdModContact'][] = WeChatUtils::protobuf2Array($t);
					break;
				case $cmdId['CmdIdDelContact']:
					$t = new DelContact();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdDelContact'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdAddMsg']:
					$t = new AddMsg();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdAddMsg'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdModMsgStatus']:
					$t = new ModMsgStatus();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdModMsgStatus'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdDelChatContact']:
					$t = new DelChatContact();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdDelChatContact'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdDelMsg']:
					$t = new DelMsg();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdDelMsg'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdOpenQQMicroBlog']:
					$t = new OpenQQMicroBlog();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdOpenQQMicroBlog'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdCloseMicroBlog']:
					$t = new CloseMicroBlog();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdCloseMicroBlog'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdModMicroBlog']:
					$t = new InviteFriendOpen();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdModMicroBlog'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdModNotifyStatus']:
					$t = new ModNotifyStatus();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdModNotifyStatus'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdModChatRoomMember']:
					$t = new ModChatRoomMember();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdModChatRoomMember'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdModContactDomainEmail']:
				break;
				case $cmdId['CmdIdModUserDomainEmail']:
					$t = new ModUserDomainEmail();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdModUserDomainEmail'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdDelUserDomainEmail']:
					$t = new DelUserDomainEmail();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdDelUserDomainEmail'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdModChatRoomNotify']:
					$t = new ModChatRoomNotify();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdModChatRoomNotify'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdPossibleFriend']:
					$t = new PossibleFriend();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdPossibleFriend'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdInviteFriendOpen']:
					$t = new InviteFriendOpen();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdInviteFriendOpen'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdFunctionSwitch']:
					$t = new FunctionSwitch();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdFunctionSwitch'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdModQContact']:
					$t = new QContact();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdModQContact'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdModTContact']:
					$t = new TContact();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdModTContact'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdPsmStat']:
					$t = new PSMStat();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdPsmStat'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['CmdIdModChatRoomTopic']:
					$t = new ModChatRoomTopic();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['CmdIdModChatRoomTopic'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_UPDATESTAT']:
					$t = new UpdateStatOpLog();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_UPDATESTAT'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_MODDISTURBSETTING']:
					$t = new ModDisturbSetting();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_MODDISTURBSETTING'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_DELETEBOTTLE']:
				break;
				case $cmdId['MM_SYNCCMD_MODBOTTLECONTACT']:
					$t = new ModBottleContact();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_MODBOTTLECONTACT'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_DELBOTTLECONTACT']:
					$t = new DelBottleContact();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_DELBOTTLECONTACT'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_MODUSERIMG']:
					$t = new MODUSERIMG();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$tm = WeChatUtils::protobuf2Array($t);
					$tm['imgBuf'] = 'data:image/jpeg;base64,' . base64_encode($tm['imgBuf']);
					$infoArray['MM_SYNCCMD_MODUSERIMG'][] = $tm;
				break;
				case $cmdId['MM_SYNCCMD_KVSTAT']:
					$t = new KVStatItem();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_KVSTAT'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['NN_SYNCCMD_THEMESTAT']:
					$t = new ThemeOpLog();
					$t -> parseFromString($cmdItem -> ThemeOpLog());
					$infoArray['NN_SYNCCMD_THEMESTAT'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_USERINFOEXT']:
					$t = new UserInfoExt();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_USERINFOEXT'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SNS_SYNCCMD_OBJECT']:
					$t = new SnsObject();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SNS_SYNCCMD_OBJECT'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SNS_SYNCCMD_ACTION']:
					$t = new SnsActionGroup();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SNS_SYNCCMD_ACTION'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_BRAND_SETTING']:
					$t = new ModBrandSetting();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_BRAND_SETTING'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_MODCHATROOMMEMBERDISPLAYNAME']:
					$t = new ModChatRoomMemberDisplayName();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_MODCHATROOMMEMBERDISPLAYNAME'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_MODCHATROOMMEMBERFLAG']:
					$t = new ModChatRoomMemberFlag();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_MODCHATROOMMEMBERFLAG'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_WEBWXFUNCTIONSWITCH']:
					$t = new WebWxFunctionSwitch();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_WEBWXFUNCTIONSWITCH'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_MODSNSUSERINFO']:
				break;
				case $cmdId['MM_SYNCCMD_MODSNSBLACKLIST']:
					$t = new ModSnsBlackList();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_MODSNSBLACKLIST'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_NEWDELMSG']:
					$t = new NewDelMsg();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_NEWDELMSG'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_MODDESCRIPTION']:
					$t = new ModDescription();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_MODDESCRIPTION'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_KVCMD']:
					$t = new KVCmd();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_KVCMD'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_SYNCCMD_DELETE_SNS_OLDGROUP']:
					$t = new DeleteSnsOldGroup();
					$t -> parseFromString($cmdItem -> getCmdBuf() -> getData());
					$infoArray['MM_SYNCCMD_DELETE_SNS_OLDGROUP'][] = WeChatUtils::protobuf2Array($t);
				break;
				case $cmdId['MM_FAV_SYNCCMD_ADDITEM']:
				break;
				case $cmdId['CmdIdMax']:
				break;
			}
		}
		return $infoArray;
	}
	//获取登录二维码
	public function getLoginQRCode(){
		$getLoginQRCodeReq = new GetLoginQRCodeRequest();
		$aesKey = WeChatUtils::genAESKey();
		$deviceId = hex2bin("49" . substr(md5(WeChatUtils::genDeviceID()), 2, 30));
		$aes = new AesKey();
		$aes -> setKey($aesKey);
		$aes -> setLen(strlen($aesKey));
		$getLoginQRCodeReq -> setAes($aes);
		$getLoginQRCodeReq -> setBaseRequest($this -> getBaseRequest($aesKey, $deviceId, 0));
		$getLoginQRCodeReq -> setOpcode(0);
		$getLoginQRCodeReqData = $getLoginQRCodeReq -> serializeToString();
		$sendData = $this -> packReq($getLoginQRCodeReqData, $this -> defs['CGI_TYPE']['CGI_TYPE_GETLOGINQRCODE'], $aesKey, 0, null, 7);
		echo "DEBUG: getLoginQRCode::sendData len: " . strlen($sendData) . "\n";
		$res = WeChatUtils::urllib('POST', $this -> shortConnectionURL . $this -> endPoints['CGI_GETLOGINQRCODE'], $sendData);
		$body = $res['body'];
		if(strlen($body) > 32){
			$u = $this -> unpackPackageHead($body);
			echo "DEBUG: getLoginQRCode:u uin:{$u['uin']}, nLenHeader:{$u['nLenHeader']}, bUseCompressed:{$u['bUseCompressed']}, cgi:{$u['cgi']}, m_nLenRespProtobuf:{$u['m_nLenRespProtobuf']}, m_nLenRespCompressed:{$u['m_nLenRespCompressed']}\n";
			$body = $this -> decrypt_AES($u['body'], $aesKey);
			if($u['bUseCompressed']){
				$body = $this -> decompress_Zlib($body);
			}
			if(strlen($body) > 0){
				$getLoginQRCodeRep = new GetLoginQRCodeResponse();
				$getLoginQRCodeRep -> parseFromString($body);
				$uuid = $getLoginQRCodeRep -> getUuid();
				$aesKey = $getLoginQRCodeRep -> getAESKey() -> getKey();
				$qrcode = $getLoginQRCodeRep -> getQRCode() -> getSrc();
				$expiredTime = $getLoginQRCodeRep -> getExpiredTime();
				$uin = $u['uin'];
				return array(
					'uuid' => $uuid,
					'aesKey' => $aesKey,
					'qrcode' => base64_encode($qrcode),
					'expiredTime' => $expiredTime,
					'deviceId' => $deviceId,
					'uin' => $uin
				);
			}else{
				Throw new Exception("ret body == 0");
			}
		}else{
			Throw new Exception("Protocol/communication error");
		}
	}
	//检查登录二维码扫码状态
	//$uuid, $aesKey, $deviceId 获取二维码时返回的uuid 获取二维码时返回的aesKey 获取二维码时使用的deviceId
	public function checkLoginQRCode($uuid, $aesKey, $deviceId){
		$checkLoginQRCodeReq = new CheckLoginQRCodeRequest();
		$aes = new AesKey();
		$aes -> setKey($aesKey);
		$aes -> setLen(strlen($aesKey));
		$checkLoginQRCodeReq -> setAes($aes);
		$checkLoginQRCodeReq -> setBaseRequest($this -> getBaseRequest($aesKey, $deviceId, 0));
		$checkLoginQRCodeReq -> setUuid($uuid);
		$checkLoginQRCodeReq -> setTimeStamp(time());
		$checkLoginQRCodeReq -> setOpcode(0);
		$checkLoginQRCodeReqData = $checkLoginQRCodeReq -> serializeToString();
		$sendData = $this -> packReq($checkLoginQRCodeReqData, $this -> defs['CGI_TYPE']['CGI_TYPE_CHECKLOGINQRCODE'], $aesKey, 0, null, 7);
		echo "DEBUG: checkLoginQRCode::sendData len: " . strlen($sendData) . "\n";
		$res = WeChatUtils::urllib('POST', $this -> shortConnectionURL . $this -> endPoints['CGI_CHECKLOGINQRCODE'], $sendData);
		$body = $res['body'];
		if(strlen($body) > 32){
			$u = $this -> unpackPackageHead($body);
			echo "DEBUG: getLoginQRCode:u uin:{$u['uin']}, nLenHeader:{$u['nLenHeader']}, bUseCompressed:{$u['bUseCompressed']}, cgi:{$u['cgi']}, m_nLenRespProtobuf:{$u['m_nLenRespProtobuf']}, m_nLenRespCompressed:{$u['m_nLenRespCompressed']}\n";
			$body = $this -> decrypt_AES($u['body'], $aesKey);
			if($u['bUseCompressed']){
				$body = $this -> decompress_Zlib($body);
			}
			$checkLoginQRCodeRep = new CheckLoginQRCodeResponse();
			$checkLoginQRCodeRep -> parseFromString($body);
			if($checkLoginQRCodeRep -> getBaseResponse() -> getRet() == $this -> defs['RETCONSTS']['MM_OK']){
				$notifyData = $this -> decrypt_AES($checkLoginQRCodeRep -> getData() -> getNotifyData() -> getBuffer(), $aesKey);
				if(strlen($notifyData) < 10){
					return -1;	//二维码可能已失效
				}
				$notify = new LoginQRCodeNotify();
				$notify -> parseFromString($notifyData);
				if($notify -> getWxid() != null){
					return array(
						'avatar' => $notify -> getHeadImgUrl(),
						'uin' => $u['uin'],
						'cookie' => $u['cookie'],
						'wxId' => $notify -> getWxid(),
						'wxTmpPass' => $notify -> getWxnewpass(),
						'state' => $notify -> getState(),
						'uuid' => $uuid,
						'aesKey' => $aesKey,
						'nickName' => $notify -> getNickName(),
						'device' => $notify -> getDevice(),
						'deviceId' => $deviceId
					);
				}else{
					return 0;	//还未扫码
				}
			}
		}else{
			Throw new Exception("Protocol/communication error");
		}
	}
	//WeChat manualAuth
	//wxid: wxid_开头的字符串或者微信号/QQ/手机号 pass: 扫码提供的临时密码或者密码md5 aesKey: 获取二维码时返回的aesKey deviceId: 获取二维码时使用的deviceId
	public function manualAuth($wxid, $pass, $aesKey, $deviceId, $host = '', $uuid = false, $mac = false){
		$ecKeyPair = $this -> EcDH_genKeyPair();
		//build ManualAuthAccountRequest
		$manualAuthAccountReq = new ManualAuthAccountRequest();
		$aes = new AesKey();
		$aes -> setKey($aesKey);
		$aes -> setLen(strlen($aesKey));
		$manualAuthAccountReq -> setAes($aes);
		$ecdh = new Ecdh();
		$ecdh -> setNid(713);	//曲线算法 713=secp224r1
		$ecdhKey = new EcdhKey();
		$ecdhKey -> setKey($ecKeyPair['publicKeyRAW']);
		$ecdhKey -> setLen(strlen($ecKeyPair['publicKeyRAW']));
		$ecdh -> setEcdhKey($ecdhKey);
		$manualAuthAccountReq -> setEcdh($ecdh);
		$manualAuthAccountReq -> setUserName($wxid);
		$manualAuthAccountReq -> setPassword1($pass);
		$manualAuthAccountReq -> setPassword2(null);
		$manualAuthAccountReqData = $manualAuthAccountReq -> serializeToString();
		//End
		//build ManualAuthDeviceRequest
		$manualAuthDeviceReq = new manualAuthDeviceRequest();
		$manualAuthDeviceReq -> setBaseRequest($this -> getBaseRequest($aesKey, $deviceId, 1));
		$baseAuthReqInfo = new BaseAuthReqInfo();
		$baseAuthReqInfo -> setAuthticket("");
		$manualAuthDeviceReq -> setBaseReqInfo($baseAuthReqInfo);
		$manualAuthDeviceReq -> setImei(md5($deviceId));
		if(!$uuid){
			$uuid = 'D0600BE0-9DFA-B440-56CD-6BFEEC57F4C1';
		}
		if(!$mac){
			$mac = '4f:1e:57:06:a5:1a';
		}
		$manualAuthDeviceReq -> setSoftInfoXml("<softtype><k3>{$this -> config['osVer']}</k3><k9>{$this -> config['deviceTypeName']}</k9><k10>2</k10><k19>{$uuid}</k19><k20></k20><k21>1003</k21><k22>(null)</k22><k24>{$mac}</k24><k33>微信</k33><k47>1</k47><k50>1</k50><k51>{$this -> config['deviceName']}</k51><k54>{$this -> config['deviceInternalModel']}</k54><k61>2</k61></softtype>");
		$manualAuthDeviceReq -> setBuiltinipseq(0);
		$manualAuthDeviceReq -> setClientSeqID(md5($deviceId) . '-' . time());
		$manualAuthDeviceReq -> setLoginDeviceName($this -> config['deviceName']);
		$manualAuthDeviceReq -> setDeviceInfoXml($this -> config['deviceName']);
		$manualAuthDeviceReq -> setLanguage($this -> config['language']);
		$manualAuthDeviceReq -> setTimeZone($this -> config['timeZone']);
		$manualAuthDeviceReq -> setChannel(0);
		$manualAuthDeviceReq -> setTimestamp(time());
		$manualAuthDeviceReq -> setDeviceBrand($this -> config['deviceBrand']);
		$manualAuthDeviceReq -> setRealCountry($this -> config['country']);
		$manualAuthDeviceReq -> setBundleid($this -> config['bundleId']);
		$manualAuthDeviceReq -> setIphonever($this -> config['deviceInternalModel']);
		$manualAuthDeviceReq -> setInputtype(2);
		//通过收集设备信息生成的一串二进制校验内容 具体内容待分析
		//不提供正确的内容会提示微信版本过老无法登陆
		$deviceCheckData = hex2bin('0a08303030303030303310011ac0068a8dceee5ab9f4e16054eda0545f7288b7951621a41446c1aec0621b3cfe6926737f8298d0b52f467fdfc5ec936d512d332a1ac664e7dfee734a5e403a72225f852734bf32f6fd623b95d17b64dc8d18fbb2ca2015113cd17518274bed4687d26f5d9e270687745541fa84921a16b50cfe487b1a88c3a91d838a2520af8757f0e5ace55ba599b9fcdf1595c3daad8e3a34c28ba39951d7a4cf9075ccc28721ba61e48c2da1b853f3be0d79ac63f47f2e3c4ff10d4d1ccc1d3002b6f63c228641c1eeb24686ba300853c355c268057d733b7898d20e6b43621419d8bcfcaed82c45377653234b7421238d00b25089670ddebb03274b1d0d8c45d5a0ea7eca9086254cceaa8674ade4df905914437bc73d4c9d50cec9abcb927590d068dc10a810d376dafb17a31f947765ff6a7f3b191ec40eec4aa86ff8771cd2d717d25ee2b7555179af4c611b9c6ad802b8fdaeae36ca3497c438e8d4a06b1a7a570d74aaf6c244e8d23ba635ff0f27dcfcf5f6c4754a0049a620ae99012eb4936d34bad267eafdb12b67d5274272d3bc795b6454b4c2b768929007d0993f742a519d567acd0369fcc9196d3cc04578f795026c336f2a29a012608c66e2068f5994210173c5a3b2720a4d040a6d2c3e873d56ce88f85cefe4847743def1102653d42fbc3a31ca5bfe2e666d3542e6e1c5bcce54d99ec934b183eed69fea87d975666065e5903f366effe04627603fd64861c142a5a19ebd344bf194de427fb4b70aa0d3cd972ac0a11ea6913e17366ca48966090e10b246bababa553dbf89bea4f55004c37e546ababb8aa20e80b2a0ed21b6700f89699fd01983eda71ace6a44b6397605d30e88683ba4bb92a50dc7affb820089f157b8c83f7b5dcd35babcc90501e2e6bdf83327a1059908c72eaf1b5a07ca6565a0888883966d26386c69293649bec0913fe12c1aba7b0b16261176e2f7d109fcf68a46b7c3af7126e77224aa36891b703655cfea2aaa8b5e095d8b204308133e63d0f0309e8b1cb5a21e9c8b27090859139c076723de4c74578f6584888220a11a45cddec43a1f542552604c96ffe3a01006946086a864c182361b3659c1bde9ecea5236f5f38ba98a4c7e8c81a39d5cba39b7a0f9ffa75ac59bb956595b58daed58a0851d48b0b7a7407fa576e4956c');
		$deviceCheckString = new SKBuiltinString_();
		$deviceCheckString -> setBuffer($deviceCheckData);
		$deviceCheckString -> setILen(strlen($deviceCheckData));
		$manualAuthDeviceReq -> setClientcheckdat($deviceCheckString);
		//End
		$manualAuthDeviceReqData = $manualAuthDeviceReq -> serializeToString();
		$subHeader = new ByteArray();
		$subHeader -> append(pack('N', strlen($manualAuthAccountReqData)), 1);
		$subHeader -> append(pack('N', strlen($manualAuthDeviceReqData)), 1);
		$authAccountData = $this -> encrypt_RSA($this -> compress_Zlib($manualAuthAccountReqData));	
		$subHeader -> append(pack('N', strlen($authAccountData)), 1);
		$authData = $subHeader -> seekBytes(0, $subHeader -> len());
		$authData .= $authAccountData;
		$authDeviceData = $this -> encrypt_AES($this -> compress_Zlib($manualAuthDeviceReqData), $aesKey);
		$authData .= $authDeviceData;
		$headData = $this -> buildPackageHead($this -> defs['CGI_TYPE']['CGI_TYPE_MANUALAUTH'], strlen($authData), strlen($authData), 0, null, 7);
		$sendData = $headData . $authData;
		echo "DEBUG: manualAuth::sendData len: " . strlen($sendData) . "\n";
		$host = $host == '' ? $this -> shortConnectionURL : $host;
		$res = WeChatUtils::urllib('POST', $host . $this -> endPoints['CGI_MANUALAUTH'], $sendData);
		$body = $res['body'];
		if(strlen($body) > 32){
			$u = $this -> unpackPackageHead($body);
			echo "DEBUG: manualAuth:u uin:{$u['uin']}, nLenHeader:{$u['nLenHeader']}, bUseCompressed:{$u['bUseCompressed']}, cgi:{$u['cgi']}, m_nLenRespProtobuf:{$u['m_nLenRespProtobuf']}, m_nLenRespCompressed:{$u['m_nLenRespCompressed']}\n";
			$body = $this -> decrypt_AES($u['body'], $aesKey);
			if($u['bUseCompressed']){
				$body = $this -> decompress_Zlib($body);
			}
			$manualAuthRep = new ManualAuthResponse();
			$manualAuthRep -> parseFromString($body);
			unset($u['body']);
			return array('ecKeyPair' => $ecKeyPair, 'manualAuthRep' => $manualAuthRep, 'packageHead' => $u);
		}else{
			Throw new Exception("Protocol/communication error");
		}
	}
	//处理登录的函数 包含后续的密钥协商
	public function doManualAuth($wxid, $pass, $aesKey, $deviceId, $host = '', $uuid = false, $mac = false){
		$manualAuth = $this -> manualAuth($wxid, $pass, $aesKey, $deviceId, $host, $uuid, $mac);
		$ecKeyPair = $manualAuth['ecKeyPair'];
		$authHead = $manualAuth['packageHead'];
		$manualAuth = $manualAuth['manualAuthRep'];
		if($manualAuth -> getDnsInfo() -> getNewHostList() -> getListCount() > 1){
			$host = $manualAuth -> getDnsInfo() -> getNewHostList() -> getList()[1] -> getSubstitute();
		}else{
			$host = $this -> shortConnectionURL;
		}
		if($manualAuth -> getBaseResponse() -> getRet() == $this -> defs['RETCONSTS']['MM_ERR_IDC_REDIRECT']){	//-301 Redirect
			//切换服务器
			$total = $manualAuth -> getDnsInfo() -> getNewHostList() -> getListCount();
			$host = $manualAuth -> getDnsInfo() -> getNewHostList() -> getList()[rand(0, $total - 2)] -> getSubstitute();
			return $this -> doManualAuth($wxid, $pass, $aesKey, $deviceId, $host, $uuid, $mac);
		}else if($manualAuth -> getBaseResponse() -> getRet() == $this -> defs['RETCONSTS']['MM_OK']){
			$srvECPublicKey = $manualAuth -> getAuthParam() -> getEcdh() -> getEcdhkey() -> getKey();
			$aesKey = $this -> EcDH_calcKey($ecKeyPair['privateKey'], $srvECPublicKey);	//共享密钥将作为sessionKey的解密密钥
			$session = $manualAuth -> getAuthParam() -> getSession() -> getKey();
			$sessionKey = $this -> decrypt_AES($session, $aesKey);	//解密 获得sessionKey 用这个key来解密所有其他通信包
			return array(
				'baseRequestInfo' => array(
					'sessionKey' => $sessionKey,
					'uin' => $authHead['uin'],
					'cookie' => $authHead['cookie'],
					'deviceId' => $deviceId,
					'privateKey' => $ecKeyPair['privateKeyRAW']
				),
				'accountInfo' => array(
					'bindMail' => $manualAuth -> getAccountInfo() -> getBindMail(),
					'bindMobile' => $manualAuth -> getAccountInfo() -> getBindMobile(),
					'alias' => $manualAuth -> getAccountInfo() -> getAlias(),
				),
				'authParameters' => array(
					'authKey' => $manualAuth -> getAuthParam() -> getAuthKey(),
					'authTicket' => $manualAuth -> getAuthParam() -> getAuthTicket(),
					'autoAuthTicket' => $manualAuth -> getAuthParam() -> getAutoAuthKey() -> getBuffer()
				),
				'host' => $host
			);
		}else{
			$msg = simplexml_load_string($manualAuth -> getBaseResponse() -> getErrMsg() -> getString(), null, LIBXML_NOCDATA);
			$e = array();
			if($msg){
				$msg = json_decode(json_encode($msg), true);
				$e['msg'] = $msg['Content'];
			}
			if(is_string($msg['Url'])){
				$e['Url'] = $msg['Url'];
			}
			Throw new Exception(var_export($msg, 1));
		}
	}
	//登出
	public function logOut($wxid, $sessionKey, $uin, $deviceId, $cookie, $host = ''){
		$logoutReq = new NewGetInviteFriendRequest();	//proto文件里面没有 找个结构一样的
		$logoutReq -> setBaseRequest($this -> getBaseRequest($sessionKey, $deviceId, 0, $uin));
		$logoutReq -> setFriendType(0);
		$logoutData = $logoutReq -> serializeToString();
		$sendData = $this -> packReq($logoutData, $this -> defs['CGI_TYPE']['CGI_TYPE_LOGOUT'], $sessionKey, $uin, $cookie, 5, true, true);
		$host = $host == '' ? $this -> shortConnectionURL : $host;
		$res = WeChatUtils::urllib('POST', $host . $this -> endPoints['CGI_LOGOUT'], $sendData);
		$body = $res['body'];
		if(strlen($body) > 32){
			$u = $this -> unpackPackageHead($body);
			$body = $this -> decrypt_AES($u['body'], $sessionKey);
			if($u['bUseCompressed']){
				$body = $this -> decompress_Zlib($body);
			}
			$logOutRep = new UploadMContactResponse();	//返回内容只有一个BaseResponse类 没有做logoutrep的proto 用这个同样结构的代替一下
			$logOutRep -> parseFromString($body);
			return true;
		}else{
			Throw new Exception("Protocol/communication error");
		}
	}
	//同步消息 keyType = 0 使用newinit返回的synckey = 1使用上次同步消息返回的key
	public function newSync($wxid, $sessionKey, $uin, $deviceId, $cookie, $syncKey, $syncKeyType = 0, $host = ''){
		$newSyncReq = new NewSyncRequest();
		$continueflag = new FLAG();
		$continueflag -> setFlag(0);
		$newSyncReq -> setContinueflag($continueflag);
		$newSyncReq -> setScene(4);
		$newSyncReq -> setSyncmsgdigest(3);
		$newSyncReq -> setSelector(262151);
		$newSyncReq -> setDevice($this -> config['deviceName']);
		$syncMsgKey = new syncMsgKey();
		if(!$syncKeyType){
			$syncKeyo = new Synckey();
			$syncKeyo -> parseFromString($syncKey);
			$syncMsgKey -> setMsgkey($syncKeyo);
			$syncMsgKey -> setLen(strlen($syncKey));
		}else{
			$syncMsgKey -> parseFromString($syncKey);
		}	
		$newSyncReq -> setTagmsgkey($syncMsgKey);
		$newSyncReqData = $newSyncReq -> serializeToString();
		$sendData = $this -> packReq($newSyncReqData, $this -> defs['CGI_TYPE']['CGI_TYPE_NEWSYNC'], $sessionKey, $uin, $cookie, 5, true, true);
		$host = $host == '' ? $this -> shortConnectionURL : $host;
		$res = WeChatUtils::urllib('POST', $host . $this -> endPoints['CGI_NEWSYNC'], $sendData);
		$body = $res['body'];
		if(strlen($body) > 32){
			$infoArray = array();
			$u = $this -> unpackPackageHead($body);
			$body = $this -> decrypt_AES($u['body'], $sessionKey);
			if($u['bUseCompressed']){
				$body = $this -> decompress_Zlib($body);
			}
			$newSyncRep = new NewSyncResponse();
			$newSyncRep -> parseFromString($body);
			if($newSyncRep -> getRet() == $this -> defs['RETCONSTS']['MM_OK']){
				$cmdList = $newSyncRep -> getCmdList();
				$status = $newSyncRep -> getStatus();
				$onlineVersion = $newSyncRep -> getOnlineversion();
				$serverTime = $newSyncRep -> getSvrtime();
				$syncKey = $newSyncRep -> getSyncKey();
				$cCount = $cmdList -> getCount();
				$oList = $cmdList -> getList();
				$infoArray = $this -> processSyncResp($cCount, $oList);
				return array('status' => $status, 'onlineVersion' => $onlineVersion, 'serverTime' => $serverTime, 'infoArray' => $infoArray, 'syncKey' => $syncKey);
			}else{
				Throw new Exception("Error in newSync, server returns: " . $newSyncRep -> getRet());
			}
		}else{
			Throw new Exception("Protocol/communication error");
		}
	}
	//初始化用户基本信息 并获得syncKey供后面调用
	public function NewInit($wxid, $sessionKey, $uin, $deviceId, $cookie, $host = ''){
		$continueFlag = 1;
		$infoArray = array();
		$syncKey = 0;
		while($continueFlag == 1){
			$data = $this -> getUserBasicInfo($wxid, $sessionKey, $uin, $deviceId, $cookie, $syncKey, 0, $host);
			if(is_array($data)){
				$continueFlag = $data['continueFlag'];
				$syncKey = $data['syncKey'];
				$infoArray = array_merge($infoArray, $this -> processSyncResp($data['cmdCount'], $data['cmdList']));
			}else{
				break;
			}
		}
		return array('basicInfo' => $infoArray, 'syncKey' => $syncKey);
	}
	//newinit实际调用的函数
	public function getUserBasicInfo($wxid, $sessionKey, $uin, $deviceId, $cookie, $syncKey = 0, $maxSyncKey = 0, $host = ''){
		$getUserBasicRequest = new GetUserBasicRequest();
		$getUserBasicRequest -> setBaseRequest($this -> getBaseRequest($sessionKey, $deviceId, 0, $uin));
		$getUserBasicRequest -> setUserName($wxid);
		$getUserBasicRequest -> setLanguage($this -> config['language']);
		$wechatstr = new SKBuiltinString_S();
		$wechatstr -> setILen(strlen(strval($syncKey)));
		$wechatstr -> setBuffer(strval($syncKey));
		$wechatstr2 = new SKBuiltinString_S();
		$wechatstr2 -> setILen(strlen(strval($maxSyncKey)));
		$wechatstr2 -> setBuffer(strval($maxSyncKey));
		$getUserBasicRequest -> setCurrentSynckey($wechatstr);
		$getUserBasicRequest -> setMaxSynckey($wechatstr2);
		$getUserBasicRequestData = $getUserBasicRequest -> serializeToString();
		$sendData = $this -> packReq($getUserBasicRequestData, $this -> defs['CGI_TYPE']['CGI_TYPE_NEWINIT'], $sessionKey, $uin, $cookie, 5, true, true);
		$host = $host == '' ? $this -> shortConnectionURL : $host;
		$res = WeChatUtils::urllib('POST', $host . $this -> endPoints['CGI_NEWINIT'], $sendData);
		$body = $res['body'];
		if(strlen($body) > 32){
			$u = $this -> unpackPackageHead($body);
			$body = $this -> decrypt_AES($u['body'], $sessionKey);
			if($u['bUseCompressed']){
				$body = $this -> decompress_Zlib($body);
			}
			$getUserBasicInfoRep = new GetUserBasicResponse();
			$getUserBasicInfoRep -> parseFromString($body);
			if($getUserBasicInfoRep -> getBaseResponse() -> getRet() == $this -> defs['RETCONSTS']['MM_OK']){
				$syncKey = $getUserBasicInfoRep -> getCurrentSynckey() -> getBuffer();
				$continueFlag = $getUserBasicInfoRep -> getContinueFlag();
				$cmdCount = $getUserBasicInfoRep -> getCmdCount();
				$cmdList = $getUserBasicInfoRep -> getCmdItem();
				return array('continueFlag' => $continueFlag, 'syncKey' => $syncKey, 'cmdCount' => $cmdCount, 'cmdList' => $cmdList);
			}else{
				Throw new Exception("Error in newSync, server returns: " . $getUserBasicInfoRep -> getBaseResponse() -> getRet());
			}
		}else{
			Throw new Exception("Protocol/communication error");
		}
	}
	//获取用户好友列表
	public function getUserFriendsList($wxid, $sessionKey, $uin, $deviceId, $cookie, $syncKey = 0, $host = ''){
		$initReq = new InitRequest();
		$initReq -> setBaseRequest($this -> getBaseRequest($sessionKey, $deviceId, 0, $uin));
		$initReq -> setSyncKey($syncKey);
		$wechatstr = new SKBuiltinString_t();
		$wechatstr -> setString($wxid);
		$initReq -> setUserName($wechatstr);
		$initReq -> setLanguage($this -> config['language']);
		$wechatstr2 = new SKBuiltinString_t();
		$wechatstr2 -> setString("");
		$initReq -> setBuffer($wechatstr2);
		$initData = $initReq -> serializeToString();
		$sendData = $this -> packReq($initData, $this -> defs['CGI_TYPE']['CGI_TYPE_INIT'], $sessionKey, $uin, $cookie, 5, true, true);
		$host = $host == '' ? $this -> shortConnectionURL : $host;
		$res = WeChatUtils::urllib('POST', $host . $this -> endPoints['CGI_INIT'], $sendData);
		$body = $res['body'];
		if(strlen($body) > 32){
			$u = $this -> unpackPackageHead($body);
			$body = $this -> decrypt_AES($u['body'], $sessionKey);
			if($u['bUseCompressed']){
				$body = $this -> decompress_Zlib($body);
			}
			$initRep = new InitResponse();
			$initRep -> parseFromString($body);
			if($initRep -> getBaseResponse() -> getRet() == $this -> defs['RETCONSTS']['MM_OK']){
				$syncKey = $initRep -> getNewSyncKey();
				$cmdCount = $initRep -> getCmdCount();
				$cmdList = $initRep -> getCmdList();
				$infoArray = $this -> processSyncResp($cmdCount, $cmdList);
				return array('syncKey' => $syncKey, 'infoArray' => $infoArray);
			}else{
				Throw new Exception("Error in newSync, server returns: " . $initRep -> getBaseResponse() -> getRet());
			}
		}else{
			Throw new Exception("Protocol/communication error");
		}
	}
	//心跳包
	public function sendHeartBeat($wxid, $sessionKey, $uin, $deviceId, $cookie, $host = ''){
		$heartBeatReq = new HeartBeatRequest();
		$heartBeatReq -> setBaseRequest($this -> getBaseRequest($sessionKey, $deviceId, 0, $uin));
		$heartBeatReq -> setTimestamp(time());
		$heartBeatReq -> setScene(0);
		$emptyString = new SKBuiltinString_();
		$emptyString -> setILen(0);
		$emptyString -> setBuffer("");
		$heartBeatReq -> setBlueToothBroadCastContent($emptyString);
		$syncMsgKey = new syncMsgKey();
		$syncMsgKey -> setLen(0);
		$heartBeatReq -> setKeybuf($syncMsgKey);
		$heartBeatData = $heartBeatReq -> serializeToString();
		$sendData = $this -> packReq($heartBeatData, $this -> defs['CGI_TYPE']['CGI_TYPE_HEARTBEAT'], $sessionKey, $uin, $cookie, 5, true, true);
		$host = $host == '' ? $this -> shortConnectionURL : $host;
		$res = WeChatUtils::urllib('POST', $host . $this -> endPoints['CGI_HEARTBEAT'], $sendData);
		$body = $res['body'];
		if(strlen($body) > 32){
			$u = $this -> unpackPackageHead($body);
			$body = $this -> decrypt_AES($u['body'], $sessionKey);
			if($u['bUseCompressed']){
				$body = $this -> decompress_Zlib($body);
			}
			$heartBeatRep = new HeartBeatResponse();
			$heartBeatRep -> parseFromString($body);
			if($heartBeatRep -> getBaseResponse() -> getRet() == $this -> defs['RETCONSTS']['MM_OK']){
				return array('nextTime' => $heartBeatRep -> getNexttime(), 'Selector' => $heartBeatRep -> getSelector());
			}else{
				Throw new Exception("Error in newSync, server returns: " . $heartBeatRep -> getBaseResponse() -> getRet());
			}
		}else{
			Throw new Exception("Protocol/communication error");
		}
	}
	//发送文字消息 一般类型的消息属于这种类型 包括XML格式的分享信息等
	//默认文字类型消息type=1 名片消息type=42 位置消息type=48
	public function sendTextMsg($wxid, $dstWxid, $content, $type, $sessionKey, $uin, $deviceId, $cookie, $host = ''){
		$sendMsgReq = new NewSendMsgRequest();
		$sendMsgReq -> setCnt(1);
		$chatInfo = new ChatInfo();
		$dstWxidStr = new SKBuiltinString();
		$dstWxidStr -> setString($dstWxid);
		$chatInfo -> setToid($dstWxidStr);
		$chatInfo -> setContent($content);
		$chatInfo -> setUtc(time());
		$chatInfo -> setClientMsgId(time());
		$chatInfo -> setMsgSource("");
		$chatInfo -> setType($type);
		$sendMsgReq -> setInfo($chatInfo);
		$sendMsgData = $sendMsgReq -> serializeToString();
		$sendData = $this -> packReq($sendMsgData, $this -> defs['CGI_TYPE']['CGI_TYPE_NEWSENDMSG'], $sessionKey, $uin, $cookie, 5, true, true);
		$host = $host == '' ? $this -> shortConnectionURL : $host;
		$res = WeChatUtils::urllib('POST', $host . $this -> endPoints['CGI_NEWSENDMSG'], $sendData);
		$body = $res['body'];
		if(strlen($body) > 32){
			$u = $this -> unpackPackageHead($body);
			$body = $this -> decrypt_AES($u['body'], $sessionKey);
			if($u['bUseCompressed']){
				$body = $this -> decompress_Zlib($body);
			}
			$sendMsgRep = new NewSendMsgRespone();
			$sendMsgRep -> parseFromString($body);
			if($sendMsgRep -> getBaseResponse() -> getRet() == $this -> defs['RETCONSTS']['MM_OK']){
				$serverRet = WeChatUtils::protobuf2Array($sendMsgRep);
				return array('serverRet' => $serverRet);
			}else{
				Throw new Exception("Error in newSync, server returns: " . $getUserBasicInfoRep -> getBaseResponse() -> getRet());
			}
		}else{
			Throw new Exception("Protocol/communication error");
		}
	}
}
