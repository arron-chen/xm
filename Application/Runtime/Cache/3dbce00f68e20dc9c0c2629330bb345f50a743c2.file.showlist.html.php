<?php /* Smarty version Smarty-3.1.6, created on 2017-02-12 21:17:48
         compiled from "./Application/Admin/View\Auth\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1907058a0607cc95bc9-92952206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dbce00f68e20dc9c0c2629330bb345f50a743c2' => 
    array (
      0 => './Application/Admin/View\\Auth\\showlist.html',
      1 => 1485928903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1907058a0607cc95bc9-92952206',
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
  'unifunc' => 'content_58a0607ccffaa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a0607ccffaa')) {function content_58a0607ccffaa($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>权限列表</title>

    <link href="<?php echo @__PUBLIC__;?>
/Admin/css/mine.css" type="text/css" rel="stylesheet" />
</head>
<body>
<style>
    
    .tr_color{background-color: #9F88FF}
    
</style>
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：权限管理-》权限列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__MODULE__;?>
/Auth/add">【添加权限】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px; margin: 10px 5px;">
    <table class="table_a" border="1" width="100%">
        <tbody><tr style="font-weight: bold;">
            <td>序号</td>
            <td>权限名称</td>
            <td>控制器</td>
            <td>操作方法</td>
            <td>全路径</td>
            <td>操作</td>

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
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_c'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_a'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_path'];?>
</td>
            <td><a href="<?php echo @__CONTROLLER__;?>
/upd/auth_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
">修改</a>
                <a onclick="if (confirm('确定要删除吗？')) return true; else return false;"
                   href="<?php echo @__CONTROLLER__;?>
/del/auth_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" >删除</a>

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