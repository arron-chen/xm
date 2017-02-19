<?php /* Smarty version Smarty-3.1.6, created on 2017-02-18 18:09:38
         compiled from "./Application/Admin/View\Manager\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:3003958a81d62169c97-40466210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f80ddfb36b5ae6cbd7bc4ed43996e9c9bea42958' => 
    array (
      0 => './Application/Admin/View\\Manager\\upd.html',
      1 => 1485859999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3003958a81d62169c97-40466210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mg_id' => 0,
    'info' => 0,
    'rinfo' => 0,
    'role_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a81d6221766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a81d6221766')) {function content_58a81d6221766($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\PHPServer\\www\\xm\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html   >
<html>
<head>
    <title>修改管理员信息</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="__PUBLIC__/Admin/css/mine.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：管理员管理-》修改管理员信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px;margin: 10px 5px">
    <form action="__SELF__" method="post" enctype="multipart/form-data">
        <input type="hidden" name="mg_id" value="<?php echo $_smarty_tpl->tpl_vars['mg_id']->value;?>
"/>
        <table border="1" width="100%" class="table_a">
            <tr>
                <td>管理员名称</td>
                <td><input type="text" name="mg_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_name'];?>
" /></td>
            </tr>
            <tr>
                <td>管理员密码</td>
                <td><input type="text" name="mg_pwd" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_pwd'];?>
" /></td>
            </tr>

                <td>角色</td>
                <td>
                    <select name="mg_role_id">
                    <option value="0">请选择</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['rinfo']->value,'selected'=>$_smarty_tpl->tpl_vars['role_id']->value),$_smarty_tpl);?>

                    </select>
                </td>
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