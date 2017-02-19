<?php
return array(
	//'配置项'=>'配置值'
    //数据库配置
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'xm',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '1234',          // 密码
    'DB_PREFIX'             =>  '',    // 数据库表前缀


    'MODULE_ALLOW_LIST'    =>    array('Home','Admin'), //允许访问的模块


    'URL_HTML_SUFFIX' => 'html',    //URL伪静态


    'SESSION_AUTO_START' => true ,   //session 自动开启

    //修改模板引擎为smarty
    'TMPL_ENGINE_TYPE' =>'Smarty',
);