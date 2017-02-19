<?php /* Smarty version Smarty-3.1.6, created on 2017-02-18 16:49:50
         compiled from "./Application/Admin/View\Article\cate.html" */ ?>
<?php /*%%SmartyHeaderCode:584158a80a59570cc4-90010925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48994ceaee6546601ec9852237a94c35dba0bc9a' => 
    array (
      0 => './Application/Admin/View\\Article\\cate.html',
      1 => 1487407788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '584158a80a59570cc4-90010925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a80a59601dc',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a80a59601dc')) {function content_58a80a59601dc($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>分类列表</title>

    <link href="<?php echo @__PUBLIC__;?>
/Admin/css/mine.css" type="text/css" rel="stylesheet" />
</head>
<body>
<style>
    
    .tr_color{background-color: #9F88FF}
    
</style>
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：文章管理-》分类列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/add">【添加栏目】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px; margin: 10px 5px;">
    <table class="table_a" border="1" width="100%">
        <tbody>
        <tr style="font-weight: bold;">
            <td>栏目id</td>
            <td>栏目名称</td>
            <td>父栏目id</td>
            <td>父栏目名称</td>
            <td>操作</td>

        </tr>

        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <tr id="product1">
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
            <td ><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pname'];?>
</td>

            <td><a href="<?php echo @__CONTROLLER__;?>
/upd/cid/<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">修改</a>
                <a onclick="if (confirm('确定要删除吗？')) return true; else return false;"
                   href="<?php echo @__CONTROLLER__;?>
/del/cid/<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" >删除</a>
            </td>

        </tr>


        <?php } ?>
        <tr>
            <td colspan="20" style="text-align: center;">
                <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

            </td>
        </tr>

        </tbody>
    </table>
</div>
</body>
</html><?php }} ?>