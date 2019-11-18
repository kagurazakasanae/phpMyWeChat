<?php
use Workerman\Worker;
use GlobalData\Server;
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/WeChat/WeChatBase.php';

$globalData = new Server();

$wechat = new WeChatBase();$c = unserialize(file_get_contents('wechat2'));
//var_dump($c);die;
//var_dump($wechat -> doManualAuth('wxid_d1u3zbj80eqp12','extdevnewpwd_CiNBOTRDMmFmYjlPYzZqUE5vczgyTFpsRUVAcXJ0aWNrZXRfMBJAcXFUSXJfdzhRZFVfWDNHX1VPTzRGdnlXdUFWVVA5aUVBdEpkRUFwYUlyZzlPcUxlMnJRREpGNi1udmswS2V5QxoYZ1NmS3JSV1czUTFFNjBzOUFqZmNJRU5V',hex2bin('27d46cd4328f5cbb0f78241d557bcecf'),hex2bin('49d59f8dae521d3c2c6062e9fa766035')));
/*
$http_worker = new Worker("http://0.0.0.0:2345");

// 启动4个进程对外提供服务
$http_worker->count = 4;

$http_worker -> onWorkerStart = function($worker) {
	require_once __DIR__ . '/API/handler.php';
	$handler = new handler();
	$worker -> onMessage = array($handler, 'onMessage');
};

// 运行worker
Worker::runAll();*/