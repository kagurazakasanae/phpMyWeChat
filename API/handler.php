<?php
use GlobalData\Client;
require_once 'httpUtils.php';

class handler{
	protected $wechat;
	protected $cache_client;
	
	public function __construct(){
		$this -> wechat = new WeChatBase();
		$this -> cache_client = new Client('127.0.0.1:2207');
		$this -> cache_client -> cache = array();
	}
	
	public function onMessage($conn, $msg){
		Workerman\Protocols\Http::header("Server: phpMyWeChat/0.1");
		$uri = httpUtils::splitReq($msg['server']['REQUEST_URI']);
		//$conn -> send(var_export($msg, 1));
		$ret = "";
		if(count($uri) == 0){
			$ret = $this -> index();
		}else{
			try{
				switch($uri[0]){
					case "Login":
						require_once 'Router/Login.php';
						$r = new Login($this -> wechat, $this -> cache_client);
						$ret = $r -> handleReq($uri);
					break;
					case "DEBUG":
						$ret = var_export($_SERVER, 1);
					break;
					default:
						$ret = $this -> nonExistsPage();
					break;
				}
			}catch(Exception $e){
				$ret = $this -> serverErrorPage($e);
			}
		}
		$conn -> send($ret);
		return;
	}
	
	protected function index(){
		return 'WeChat Protocol API Index<br>Version: V0.1 Alpha';
	}
	
	protected function nonExistsPage(){
		Workerman\Protocols\Http::header("HTTP/1.1 404 Not Found");
		return "404, That's an error";
	}
	
	protected function serverErrorPage($e){
		Workerman\Protocols\Http::header("HTTP/1.1 500 Server Been Fucked");
		$html = "<h1><b>HTTP 500<b></h1><br>";
		$html .= "That means the server messed up sort of things<br>";
		$html .= "Here are details of this exception:<br>";
		$html .= "<pre>Exception: " . $e -> getMessage() . "\n";
		$html .= "StackTrace: " . $e -> getTraceAsString() . "</pre>";
		return $html;
	}
}