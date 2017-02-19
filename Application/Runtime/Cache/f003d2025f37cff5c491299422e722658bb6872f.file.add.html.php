<?php /* Smarty version Smarty-3.1.6, created on 2017-02-18 18:10:03
         compiled from "./Application/Admin/View\Manager\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1030858a81d7bb82362-73871539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f003d2025f37cff5c491299422e722658bb6872f' => 
    array (
      0 => './Application/Admin/View\\Manager\\add.html',
      1 => 1485846462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1030858a81d7bb82362-73871539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a81d7bc474a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a81d7bc474a')) {function content_58a81d7bc474a($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\PHPServer\\www\\xm\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html   >
<html>
<head>
    <title>添加管理员</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="__PUBLIC__/Admin/css/mine.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：管理员管理-》添加管理员</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="__MODULE__/Manager/showlist">【返回】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px;margin: 10px 5px">
    <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
        <input type="hidden" name="mg_id"/>
        <table border="1" width="100%" class="table_a">
            <tr>
                <td>管理员名称</td>
                <td><input type="text" name="mg_name" /></td>
            </tr>
            <tr>
                <td>管理员密码</td>
                <td><input type="text" name="mg_pwd" /></td>
            </tr>
            <tr>
                <td>管理员角色</td>
                <td>
                    <select name="mg_role_id">
                        <option value="0">请选择</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['info']->value),$_smarty_tpl);?>

                    </select>
                </td>
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