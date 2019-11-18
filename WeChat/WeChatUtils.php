<?php
//Static functions for WeChat Protocol
class WeChatUtils{
	//Gen a Device ID(in number)
	public static function genDeviceID(){
		$res = "";
		for($i=0;$i<15;$i++){
			$res .= strval(rand(0, 9));
		}
		return $res;
	}
	//Gen a AES key for communication, in str
	public static function genAESKey(){
		$str = "";
		for($i=0;$i<16;$i++){
			$str .= chr(rand(33, 126));	//i wish them all be visable
		}
		return $str;
	}
	//pack signed int32 into str, big-endian
	public static function pack_int32be($i) {
	   if ($i < -2147483648 || $i > 2147483647) {
		  die("Out of bounds");
	   }
	   return pack('C4',
		  ($i >> 24) & 0xFF,
		  ($i >> 16) & 0xFF,
		  ($i >>  8) & 0xFF,
		  ($i >>  0) & 0xFF
	   );
	}
	//protobuf _VarintBytes encode
	public static function dword2String($dw){
		$ret = "";
		while($dw >= 0x80){
			$ret .= chr((0x80 + ($dw & 0x7f)));
			$dw = $dw >> 7;
		}
		$ret .= chr($dw);
		return $ret;
	}
	//protobuf _VarintBytes decode
	//$apcBuffer : ByteArray
	public static function decodeVByte32($apcBuffer, $off){
		$num = 0;
		$num2 = 0;
		$num3 = 0;
		$num4 = 0;
		$num5 = $apcBuffer -> seek($off + ($num++));
		while(($num5 & 0xff) >= 0x80){
			$num3 = $num5 & 0x7f;
			$num4 += $num3 << $num2;
			$num2 += 7;
			$num5 = $apcBuffer -> seek($off + ($num++));
		}
		$num4 += $num5 << $num2;
		return array($num, $num4);	//len, result
	}
	//call wechat server(short connection)
	public static function urllib($function, $url, $data = '', $timedout = 10){
		if(!isset($header['User-Agent'])){
			$header['User-Agent'] = 'MicroMessenger Client';
		}
		$header['Content-Type'] = 'application/octet-stream';
		$header['Accept'] = '*/*';
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_TIMEOUT, $timedout);
		curl_setopt($curl, CURLOPT_HEADER, 1);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		$curl_header = array();
		foreach($header as $k => $v){
			$curl_header[] = $k . ": " . $v;
		}
		//curl_setopt($curl, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);  
		//curl_setopt($curl, CURLOPT_PROXY, "127.0.0.1:1080");  
		if($function == 'POST'){
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		}
		curl_setopt($curl, CURLOPT_HTTPHEADER, $curl_header);
		$r = curl_exec($curl);
		//var_dump(curl_error($curl));
		//var_dump(curl_errno($curl));
		curl_close($curl);
		$tmp = explode("\r\n\r\n", $r);
		if(strlen($tmp[0]) > 23){
			$retheader = $tmp[0];
			unset($tmp[0]);
		}else{
			$retheader = $tmp[1];
			unset($tmp[1]);
			unset($tmp[0]);
		}
		$body = implode("\r\n\r\n", $tmp);
		$retheader = explode("\r\n", $retheader);
		$ret_header = array();
		foreach($retheader as $ret){
			if(stristr($ret, ': ')){
				$t = explode(': ', $ret);
				$ret_header[$t[0]] = $t[1];
			}
		}
		return array('header'=>$ret_header,'body'=>$body);
	}
	//random uuid generator
	public static function create_uuid(){ 
		$str = md5(uniqid(mt_rand(), true));   
		$uuid  = substr($str,0,8) . '-';   
		$uuid .= substr($str,8,4) . '-';   
		$uuid .= substr($str,12,4) . '-';   
		$uuid .= substr($str,16,4) . '-';   
		$uuid .= substr($str,20,12);   
		return strtoupper($uuid);
	}
	//random mac generator
	public static function mac_gen(){
		$array=array(
			mt_rand(0x00, 0x7f),
			mt_rand(0x00, 0x7f),
			mt_rand(0x00, 0x7f),
			mt_rand(0x00, 0x7f),
			mt_rand(0x00, 0xff),
			mt_rand(0x00, 0xff)
		);
		$mac = join(':',array_map(function($v){
			return sprintf("%02X",$v);
		},$array));
		return strtolower($mac);
	}
	//convert Protobuf class to array
	public static function protobuf2Array($p){
		$f = $p -> fields();
		$r = array();
		foreach($f as $k => $v){
			$cName = strtoupper($v['name'][0]) . substr($v['name'], 1);
			$cName = str_replace('_', '', $cName);
			$funcName = 'get' . $cName;
			$ret = call_user_func(array($p, $funcName));
			if(!isset($v['repeated']) || $v['repeated'] == false){
				if(is_object($ret)){
					$r[$v['name']] = self::protobuf2Array($ret);
				}else{
					$r[$v['name']] = $ret;
				}
			}else{
				$r[$v['name']] = array();
				foreach($ret as $s){
					if(is_object($s)){
						$r[$v['name']][] = self::protobuf2Array($s);
					}else{
						$r[$v['name']][] = $s;
					}
				}
			}
		}
		return $r;
	}
}