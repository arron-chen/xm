<?php /* Smarty version Smarty-3.1.6, created on 2017-02-18 17:50:55
         compiled from "./Application/Admin/View\Auth\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2175558a818ff0034c1-34895308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfa4cd9470f4025a459569643b92322a8733c4c7' => 
    array (
      0 => './Application/Admin/View\\Auth\\add.html',
      1 => 1485784949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2175558a818ff0034c1-34895308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'authinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a818ff072d7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a818ff072d7')) {function content_58a818ff072d7($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\PHPServer\\www\\xm\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html   >
<html>
<head>
    <title>添加权限</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="__PUBLIC__/Admin/css/mine.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：权限管理-》添加权限信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="__MODULE__/Auth/showlist">【返回】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px;margin: 10px 5px">
    <form action="__SELF__" method="post" enctype="multipart/form-data">
        <table border="1" width="100%" class="table_a">
            <tr>
                <td>权限名称</td>
                <td><input type="text" name="auth_name" /></td>
            </tr>
            <tr>
                <td>权限父级</td>
                <td>
                    <select name="auth_pid">
                    <option value="0">请选择</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['authinfo']->value),$_smarty_tpl);?>

                    </select>
                </td>
            </tr>
            <tr>
                <td>权限控制器</td>
                <td><input type="text" name="auth_c" /></td>
            </tr>
            <tr>
                <td>权限操作方法</td>
                <td><input type="text" name="auth_a" /></td>
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