<?php /* Smarty version Smarty-3.1.6, created on 2017-02-12 21:17:34
         compiled from "./Application/Admin/View\Index\head.html" */ ?>
<?php /*%%SmartyHeaderCode:512058a0606ec88015-76594694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c98b2a1a14a97f2e8afacbe99a17ac8287077dac' => 
    array (
      0 => './Application/Admin/View\\Index\\head.html',
      1 => 1485793080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '512058a0606ec88015-76594694',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a0606ecc5b8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a0606ecc5b8')) {function content_58a0606ecc5b8($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
    <meta http-equiv=content-type content="text/html; charset=utf-8"/>
    <link href="__PUBLIC__/Admin/css/admin.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<table cellspacing=0 cellpadding=0 width="100%"
       background="__PUBLIC__/Admin/img/header_bg.jpg" border=0>
    <tr height=56>
        <td width=260><img height=56 src="__PUBLIC__/Admin/img/header_left.jpg"
                           width=260></td>
        <td style="font-weight: bold; color: #fff; padding-top: 20px"
            align=middle>当前用户：<?php echo $_SESSION['mg_username'];?>
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <a style="color: #fff"
                                                                                         onclick="if (confirm('确定要退出吗？')) return true; else return false;"
                                                                                         href="__MODULE__/Manager/logout" target=_top>退出系统</a>
        </td>
        <td align=right width=268><img height=56
                                       src="__PUBLIC__/Admin/img/header_right.jpg" width=268></td>
    </tr>
</table>
<table cellspacing=0 cellpadding=0 width="100%" border=0>
    <tr bgcolor=#1c5db6 height=4>
        <td></td>
    </tr>
</table>
</body>
</html>

<?php }} ?>