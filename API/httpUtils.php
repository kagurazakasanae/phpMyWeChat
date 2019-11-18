<?php
class httpUtils{
	public static function splitReq($uri){
		$req = explode('/', $uri);	//分割请求url
		$requests = array();
		foreach($req as $tmp){
			if($tmp == ''){
				continue;
			}else{
				$requests[] = explode('?',$tmp)[0];
			}
		}
		return $requests;
	}
}
