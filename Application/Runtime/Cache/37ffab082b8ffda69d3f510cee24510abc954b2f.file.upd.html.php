<?php /* Smarty version Smarty-3.1.6, created on 2017-02-15 14:50:48
         compiled from "./Application/Admin/View\Role\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:1340358a3fa482b7615-32335930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37ffab082b8ffda69d3f510cee24510abc954b2f' => 
    array (
      0 => './Application/Admin/View\\Role\\upd.html',
      1 => 1485861316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1340358a3fa482b7615-32335930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a3fa483919a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a3fa483919a')) {function content_58a3fa483919a($_smarty_tpl) {?><!DOCTYPE html   >
<html>
<head>
    <title>修改角色信息</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="__PUBLIC__/Admin/css/mine.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：角色管理-》修改角色信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px;margin: 10px 5px">
    <form action="__SELF__" method="post" enctype="multipart/form-data">
        <input type="hidden" name="role_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['role_id'];?>
"/>
        <table border="1" width="100%" class="table_a">
            <tr>
                <td>角色名称</td>
                <td><input type="text" name="role_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['role_name'];?>
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