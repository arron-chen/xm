<?php
header('Content-Type:text/html;Charset=UTF-8');
//应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);



// 默认绑定Home模块 URL可以忽略/Home/
//绑定了默认模块就不能打开其他模块
//define('BIND_MODULE' ,'Home');



// 定义应用目录
define('APP_PATH','./Application/');

//定义css,js.images 常量


// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';