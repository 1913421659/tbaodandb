<?php
include '/tbao/TopSdk.php';
//实例化topclien类
require_once ('/tbao/TopSdk.php');  //引入淘宝开放API
	//1.确定应用名称 Home
	define('APP_NAME','tbao');
	//2.确定应用路径
	define('APP_PATH','./tbao/');
	define('APP_DEBUG',true);
	//4.应用核心文件
	require './tbao/ThinkPHP/ThinkPHP.php';