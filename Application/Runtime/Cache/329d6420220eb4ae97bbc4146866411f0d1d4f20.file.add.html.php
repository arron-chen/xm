<?php /* Smarty version Smarty-3.1.6, created on 2017-02-18 17:50:40
         compiled from "./Application/Admin/View\Role\add.html" */ ?>
<?php /*%%SmartyHeaderCode:577058a818f0a71a20-67440509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '329d6420220eb4ae97bbc4146866411f0d1d4f20' => 
    array (
      0 => './Application/Admin/View\\Role\\add.html',
      1 => 1485846999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '577058a818f0a71a20-67440509',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a818f0c5d4e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a818f0c5d4e')) {function content_58a818f0c5d4e($_smarty_tpl) {?><!DOCTYPE html   >
<html>
<head>
    <title>添加角色</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="__PUBLIC__/Admin/css/mine.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：角色管理-》添加角色</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="__MODULE__/Role/showlist">【返回】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px;margin: 10px 5px">
    <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
        <input type="hidden" name="role_id"/>
        <table border="1" width="100%" class="table_a">
            <tr>
                <td>角色名称</td>
                <td><input type="text" name="role_name" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="添加">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html><?php }} ?>