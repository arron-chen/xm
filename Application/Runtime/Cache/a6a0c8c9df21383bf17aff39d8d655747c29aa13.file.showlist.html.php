<?php /* Smarty version Smarty-3.1.6, created on 2017-02-12 21:17:47
         compiled from "./Application/Admin/View\Role\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1336958a0607b7b8383-34731351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6a0c8c9df21383bf17aff39d8d655747c29aa13' => 
    array (
      0 => './Application/Admin/View\\Role\\showlist.html',
      1 => 1485928747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1336958a0607b7b8383-34731351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a0607b82040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a0607b82040')) {function content_58a0607b82040($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>角色列表</title>

    <link href="<?php echo @__PUBLIC__;?>
/Admin/css/mine.css" type="text/css" rel="stylesheet" />
</head>
<body>
<style>
    
    .tr_color{background-color: #9F88FF}
    
</style>
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：角色管理-》角色列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__MODULE__;?>
/Role/add">【添加角色】</a>
                </span>
            </span>
</div>
<div></div>
<div style="font-size: 13px; margin: 10px 5px;">
    <table class="table_a" border="1" width="100%">
        <tbody><tr style="font-weight: bold;">
            <td>序号</td>
            <td>角色名称</td>
            <td align="center">操作</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
        <tr id="product1">
            <td><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</a></td>
            <td>
                <a onclick="if (confirm('确定要删除吗？')) return true; else return false;"
                   href="<?php echo @__CONTROLLER__;?>
/del/role_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
" >删除</a>
                <a href="<?php echo @__CONTROLLER__;?>
/upd/role_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
">修改</a>
                <a href="<?php echo @__CONTROLLER__;?>
/distribute/role_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
"> 分配权限</a>

            </td>

        </tr>
        <?php } ?>
        <tr>
            <td colspan="20" style="text-align: center;">

            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html><?php }} ?>