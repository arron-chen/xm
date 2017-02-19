<?php /* Smarty version Smarty-3.1.6, created on 2017-02-18 20:21:22
         compiled from "./Application/Admin/View\Article\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1296658a7bc40264134-95611478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '545ca7efda23d468d7d1482e49801ee1afb9b935' => 
    array (
      0 => './Application/Admin/View\\Article\\showlist.html',
      1 => 1487420468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1296658a7bc40264134-95611478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a7bc402c966',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'rinfo' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a7bc402c966')) {function content_58a7bc402c966($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>文章列表</title>

    <link href="<?php echo @__PUBLIC__;?>
/Admin/css/mine.css" type="text/css" rel="stylesheet" />
</head>
<body>
<style>
    
    .tr_color{background-color: #9F88FF}
    .product2{position:relative}
    
</style>
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：文章管理-》文章列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/add">【添加文章】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px; margin: 10px 5px;">
    <table class="table_a" border="1" width="100%">
        <tbody>
        <tr style="font-weight: bold;">
            <td>序号</td>
            <td>分类</td>
            <td>标题</td>
            <td>作者</td>
            <td>时间</td>
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
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rinfo']->value[$_smarty_tpl->tpl_vars['v']->value['cid']];?>
</td>
            <td ><a href="__CONTROLLER__/articleshow/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['author'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['posttime'];?>
</td>
            <td><a href="<?php echo @__CONTROLLER__;?>
/upd/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
                <a onclick="if (confirm('确定要删除吗？')) return true; else return false;"
                   href="<?php echo @__CONTROLLER__;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
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