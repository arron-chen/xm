<?php /* Smarty version Smarty-3.1.6, created on 2017-02-15 11:21:45
         compiled from "./Application/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1965058a2fda1e24bb2-13819852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dc2f06470e0d27be6a65963ba9e14d0de51cc7a' => 
    array (
      0 => './Application/Home/View\\User\\login.html',
      1 => 1487127510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1965058a2fda1e24bb2-13819852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a2fda2026b5',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a2fda2026b5')) {function content_58a2fda2026b5($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>用户登录</title>
    <link href="__PUBLIC__/Home/css/login.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all" />
    <link href="__PUBLIC__/Home/css/demo.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all" />

<style>
    .btn-login{ width:242px; height:38px; background:url(__PUBLIC__/Home/images/login/login-btn.png) no-repeat; border:none; margin-top:5px;}
</style>
</head>

<body>


<div class="header">
    <h1 class="headerLogo"><a title="后台管理系统"  href="#"><img alt="logo" src="__PUBLIC__/Home/images/login/logo1.gif"></a></h1>
    <div class="headerNav">
        <a  href="#">校媒官网</a>
        <a  href="#">关于校媒</a>

    </div>
</div>

<div class="banner">

    <div class="login-aside">
        <div id="o-box-up"></div>
        <div id="o-box-down"  style="table-layout:fixed;">
            <div class="error-box"></div>

            <form class="registerform" action="__SELF__">
                <div class="fm-item">
                    <label class="form-label">用户登陆：</label>
                    <input type="text" value="输入账号" maxlength="100" id="username" class="i-text"  >
                    <div class="ui-form-explain"></div>
                </div>

                <div class="fm-item">
                    <label  class="form-label">登陆密码：</label>
                    <input type="password" value="" maxlength="100" id="password" class="i-text" >
                    <div class="ui-form-explain"></div>
                </div>

                <div class="fm-item pos-r">
                    <label class="form-label">验证码</label>
                    <input type="text" value="输入验证码" maxlength="100" id="yzm" class="i-text yzm"  >
                    <div class="ui-form-explain"><img src="__CONTROLLER__/verifyImg" class="yzm-img" /></div>
                </div>

                <div class="fm-item">
                    <label  class="form-label"></label>
                    <input type="submit" value="" tabindex="4" id="send-btn" class="btn-login">
                    <div class="ui-form-explain"></div>
                </div>

            </form>

        </div>

    </div>

    <div class="bd">
        <ul>
            <li style="background:url(__PUBLIC__/Home/images/login/theme-pic1.jpg) #CCE1F3 center 0 no-repeat;"><a  href="#"></a></li>
            <li style="background:url(__PUBLIC__/Home/images/login/theme-pic2.jpg) #BCE0FF center 0 no-repeat;"><a  href="#"></a></li>
        </ul>
    </div>


</div>


</body>
</html>
<?php }} ?>