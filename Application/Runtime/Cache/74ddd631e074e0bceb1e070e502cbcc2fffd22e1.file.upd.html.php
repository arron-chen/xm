<?php /* Smarty version Smarty-3.1.6, created on 2017-02-18 17:39:57
         compiled from "./Application/Admin/View\Auth\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:822058a8166d234af5-43036093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74ddd631e074e0bceb1e070e502cbcc2fffd22e1' => 
    array (
      0 => './Application/Admin/View\\Auth\\upd.html',
      1 => 1485867468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '822058a8166d234af5-43036093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth_info' => 0,
    'authinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a8166d31411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a8166d31411')) {function content_58a8166d31411($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\PHPServer\\www\\xm\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html   >
<html>
<head>
    <title>修改权限</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="__PUBLIC__/Admin/css/mine.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：权限管理-》修改权限信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="__MODULE__/Auth/showlist">【返回】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px;margin: 10px 5px">
    <form action="__SELF__" method="post" enctype="multipart/form-data">
        <input type="hidden" name="auth_id" value="<?php echo $_smarty_tpl->tpl_vars['auth_info']->value[0]['auth_id'];?>
"/>
        <table border="1" width="100%" class="table_a">
            <tr>
                <td>名称</td>
                <td><input type="text" name="auth_name" value="<?php echo $_smarty_tpl->tpl_vars['auth_info']->value[0]['auth_name'];?>
" /></td>
            </tr>
            <tr>
                <td>父级</td>
                <td>
                    <select name="auth_pid" >
                        <option value="0">请选择</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['authinfo']->value,'selected'=>$_smarty_tpl->tpl_vars['auth_info']->value[0]['auth_pid']),$_smarty_tpl);?>

                    </select>
                </td>
            </tr>
            <tr>
                <td>控制器</td>
                <td><input type="text" name="auth_c" value="<?php echo $_smarty_tpl->tpl_vars['auth_info']->value[0]['auth_c'];?>
" /></td>
            </tr>
            <tr>
                <td>操作方法</td>
                <td><input type="text" name="auth_a"  value="<?php echo $_smarty_tpl->tpl_vars['auth_info']->value[0]['auth_a'];?>
"/></td>
            </tr>
            <tr>
                <td>全路径</td>
                <td><input type="text" name="auth_path" value="<?php echo $_smarty_tpl->tpl_vars['auth_info']->value[0]['auth_path'];?>
" /></td>
            </tr>
            <tr>
                <td>级别</td>
                <td><input type="text" name="auth_level" value="<?php echo $_smarty_tpl->tpl_vars['auth_info']->value[0]['auth_level'];?>
" /></td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="提交">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html><?php }} ?>