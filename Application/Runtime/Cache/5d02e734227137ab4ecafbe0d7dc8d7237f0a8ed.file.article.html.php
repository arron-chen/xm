<?php /* Smarty version Smarty-3.1.6, created on 2017-02-15 17:48:32
         compiled from "./Application/Home/View\Article\article.html" */ ?>
<?php /*%%SmartyHeaderCode:2004458a41fbd276ba2-71869521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d02e734227137ab4ecafbe0d7dc8d7237f0a8ed' => 
    array (
      0 => './Application/Home/View\\Article\\article.html',
      1 => 1487152111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2004458a41fbd276ba2-71869521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a41fbd347d6',
  'variables' => 
  array (
    'data' => 0,
    'art_data' => 0,
    'cate_data' => 0,
    'pages' => 0,
    'page' => 0,
    'prepage' => 0,
    'page_num' => 0,
    'foo' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a41fbd347d6')) {function content_58a41fbd347d6($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>文章列表</title>
    
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        .whole {
            margin: 0 auto;
            width: 980px;
        }

        .clear {
            clear: both;
        }

        .logo {
            background-image: url("__PUBLIC__/Home/images/article_banner/art_banner6.png");
            height: 120px;
        }

        .lanmu {
            background-color: #fff;
            margin: 5px 0 5px 0;
        }

        .lanmu a {
            text-decoration: none;
            font-size: 17px;
            font-family: "楷体";
            line-heigth: 17px;
        }

        .lanmu a:hover {
            text-decoration: underline;
        }

        .lanmu span {
            font-size: 16px;
            font-family: "楷体";
            line-heigth: 15px;
        }

        .main {
            height: auto;
        }

        .left {
            float: left;
            width: 72%;
            border: solid 1px #ccc;
            height: auto;
        }

        .mulu {
            line-height: 35px;
            background-color: #c1c1c1;
        }

        .mulu h3 {
            font-size: 20px;
            font-family: "楷体";
            margin-left: 20px;
        }

        .sub_mulu {
            margin: 8px 0 8px 0;
            padding-left: 10px;
        }

        .sub_mulu span, a {
            font-size: 14px;
            font-family: "楷体";
        }

        .list {
            width: 92%;
            margin: 0 auto;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .item a {
            font-size: 17px;
            text-decoration: none;
        }

        .item p {
            font-size: 15px;
            line-height: 20px;
            margin-top: 3px;
            margin-bottom: 3px;
        }

        .item_fenlei {
            margin-bottom: 5px;
        }

        .item_fenlei span {
            font-size: 14px;
        }

        .right {
            float: right;
            border: solid 1px #ccc;
            width: 25%;
            height: 300px;
        }

        .sub_right {
            margin-left: 20px;
            margin-top: 10px;
        }

        .list_style {
            list-style: none;
        }

        .list_style li {
            width: 100px;
            line-height: 23px;
            float: left;
        }

        .list_style a {
            font-size: 15px;
            text-decoration: none;
        }

        .list_style a:hover {
            text-decoration: underline;
        }

        .fenye {
            float: right;
            margin-top: 10px;
            width: 100%;
            border: solid 1px #ccc;
            text-align: center;
            margin-bottom: 20px;
        }

        .fenye a {
            text-decoration: none;
            font-size: 16px;
            font-family: "楷体";
        }

        .fenye a:hover {
            text-decoration: underline;
        }
    </style>
    
</head>
<body>
<div class="whole">
    <div class="logo">
        <img src=""/>
    </div>
    <div class="lanmu">
        <a href="__MODULE__/index/index">首页</a>&nbsp;<span>></span>&nbsp;<span><<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
></span>
    </div>
    <div class="main">
        <div class="left">
            <div class="mulu">
                <h3><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</h3>
            </div>
            <div class="sub_mulu">
                <span>下级分类：</span><a>媒体聚焦</a><span>&nbsp;|&nbsp;</span><a>媒体聚焦</a>
            </div>
            <hr
                    style="height: 1px; border: none; border-top: 1px dashed #0066CC;"/>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['x'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['x']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['name'] = 'x';
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['art_data']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total']);
?>
            <div class="list">
                <div class="item">
                    <h3>
                        <a href="article_show.php?id=<<?php echo $_smarty_tpl->tpl_vars['art_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['id'];?>
>"><?php echo $_smarty_tpl->tpl_vars['art_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['title'];?>
</a>
                    </h3>

                </div>
                <div class="item_fenlei">
                    <span>作者：</span><a><?php echo $_smarty_tpl->tpl_vars['art_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['author'];?>
</a> <span><?php echo $_smarty_tpl->tpl_vars['art_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['posttime'];?>
</span>
                </div>
                <hr
                        style="height: 1px; border: none; border-top: 1px dashed #0066CC;"/>
            </div>
            <?php endfor; endif; ?>

        </div>
        <div class="right">
            <div class="mulu">
                <h3>栏目分类</h3>
            </div>
            <div class="sub_right">
                <ul class="list_style">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['x'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['x']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['name'] = 'x';
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cate_data']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total']);
?>
                    <li><a href="article_list.php?cid=<<?php echo $_smarty_tpl->tpl_vars['cate_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['cid'];?>
>"><?php echo $_smarty_tpl->tpl_vars['cate_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['name'];?>
</a></li>
                    <?php endfor; endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="fenye">

        <span>共<<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
>页&nbsp;当前第<<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
>页</span>
        <a href="article_list.php?page=1&&cid=<<?php echo $_smarty_tpl->tpl_vars['data']->value['cid'];?>
>">首页</a>
        <a href="article_list.php?page=<<?php echo $_smarty_tpl->tpl_vars['prepage']->value;?>
>&&cid=<<?php echo $_smarty_tpl->tpl_vars['data']->value['cid'];?>
>">上一页</a>

        <<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_num']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>> <a
            href="article_list.php?page=<<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
>&&cid=<<?php echo $_smarty_tpl->tpl_vars['data']->value['cid'];?>
>"><<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
></a>
        <<?php } ?>> <a
            href="article_list.php?page=<<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
>&&cid=<<?php echo $_smarty_tpl->tpl_vars['data']->value['cid'];?>
>">下一页</a>
        <a href="article_list.php?page=<<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
>&&cid=<<?php echo $_smarty_tpl->tpl_vars['data']->value['cid'];?>
>">尾页</a>
    </div>
</div>
</body>
</html><?php }} ?>