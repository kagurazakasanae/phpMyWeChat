<?php
use Workerman\Worker;
use GlobalData\Server;
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/WeChat/WeChatBase.php';

$globalData = new Server();

$http_worker = new Worker("http://0.0.0.0:2345");

// 启动4个进程对外提供服务
$http_worker->count = 4;

$http_worker -> onWorkerStart = function($worker) {
	require_once __DIR__ . '/API/handler.php';
	$handler = new handler();
	$worker -> onMessage = array($handler, 'onMessage');
};

// 运行worker
Worker::runAll();
