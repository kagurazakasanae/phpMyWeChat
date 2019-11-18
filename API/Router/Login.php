<?php
use GlobalData\Client;

class Login extends handler{
	public function __construct($wechat, $cache){
		$this -> wechat = $wechat;
		$this -> cache_client = $cache;
	}
	
	public function handleReq($uri){
		if(count($uri) == 1){
			return 'Router: Login';
		}
		switch($uri[1]){
			case "getLoginQRCode":
				return $this -> getLoginQRCodePage();
			break;
			case "checkLoginQRCode":
				return $this -> checkLoginQRCodePage($uri);
			break;
			case "logOut":
				return $this -> doLogoutPage();
			break;
			default:
				return parent::nonExistsPage();
			break;
		}
		return;
	}
	
	private function getLoginQRCodePage(){
		$qr = $this -> wechat -> getLoginQRCode();
		$ret = json_encode(array(
			'success' => true,
			'data' => array(
				'QRCode' => "data:img/jpg;base64," . $qr['qrcode'],
				'uuid' => $qr['uuid'],
				'expiredIn' => $qr['expiredTime']
			)
		));
		unset($qr['qrcode']);
		$tmp = $this -> cache_client -> cache;
		$tmp[$qr['uuid']] = $qr;
		$this -> cache_client -> cache = $tmp;
		Workerman\Protocols\Http::header("Content-Type: application/json; charset=utf-8");
		return $ret;
	}
	
	private function checkLoginQRCodePage($uri){
		if(count($uri) != 3){
			throw new Exception("Missing parameter 'uuid'");
		}
		$uuid = $uri[2];
		if(isset($this -> cache_client -> cache[$uuid])){
			$data = $this -> cache_client -> cache[$uuid];
			$status = $this -> wechat -> checkLoginQRCode($data['uuid'], $data['aesKey'], $data['deviceId']);
			if($status == -1 || $status == 0){
				return json_encode(array(
					'success' => false,
					'reason' => $status
				));
			}else{
				$tmp = $this -> cache_client -> cache;
				$auth = $this -> wechat -> doManualAuth($status['wxId'], $status['wxTmpPass'],  $data['aesKey'], $data['deviceId']);
				$tmp[$status['wxId']] = array('login' => $status, 'auth' => $auth);
				unset($tmp[$uuid]);
				unset($status['aesKey']);
				unset($status['deviceId']);
				unset($status['cookie']);
				unset($status['wxTmpPass']);
				$this -> cache_client -> cache = $tmp;
				file_put_contents('wechat2', serialize($tmp[$status['wxId']]));
				return json_encode(array(
					'success' => true,
					'data' => $status
				));
			}
		}else{
			throw new Exception("The provided 'uuid' not exists in the cache");
		}
	}
	
	private function doLogoutPage(){
		if(!isset($_POST['wxId'])){
			throw new Exception("Missing parameter 'wxId'");
		}
		$wxId = $_POST['wxId'];
		if(isset($this -> cache_client -> cache[$wxId])){
			$c = $this -> cache_client -> cache[$wxId];
			$r = $this -> wechat -> logOut($wxId, $c['auth']['baseRequestInfo']['sessionKey'], $c['auth']['baseRequestInfo']['uin'], $c['auth']['baseRequestInfo']['deviceId'], $c['auth']['baseRequestInfo']['cookie'], $c['auth']['host']);
			return json_encode(array(
				'success' => $r,
			));
		}else{
			throw new Exception("The provided 'wxId' not exists in the cache");
		}
	}
}
