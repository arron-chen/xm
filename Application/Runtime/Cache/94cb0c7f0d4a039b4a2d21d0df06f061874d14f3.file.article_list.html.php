<?php /* Smarty version Smarty-3.1.6, created on 2017-02-19 15:30:43
         compiled from "./Application/Home/View\Index\article_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2403258a93288217246-66087101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94cb0c7f0d4a039b4a2d21d0df06f061874d14f3' => 
    array (
      0 => './Application/Home/View\\Index\\article_list.html',
      1 => 1487489403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2403258a93288217246-66087101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a9328834b1a',
  'variables' => 
  array (
    'cate_m' => 0,
    'data' => 0,
    'cate_data' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a9328834b1a')) {function content_58a9328834b1a($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>栏目列表</title>
	
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
.lanmu a:hover{text-decoration:underline;}


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
.item a:hover
{
    color:#00b7ee;
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

.list_style a:hover{color:#00b7ee;}

.fenye {
	float: left;
	margin-top: 10px;
	width: 72%;
	border: solid 1px #ccc;
	text-align: center;
	margin-bottom: 20px;
    font-size: 14px;
}

.fenye a {
	text-decoration:none;
	font-size: 15px;
	font-family: "楷体";
}
.fenye a:hover{text-decoration:underline;}
</style>
	
</head>
<body>
	<div class="whole">
		<div class="logo">
			<img src="__PUBLIC__/Home/images/article_banner/art_banner6.png"  width="980px" height="120px" />
		</div>
		<div class="lanmu">
			<a href="__CONTROLLER__/Index/index">首页</a>&nbsp;<span>></span>&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['cate_m']->value[0]['name'];?>
</span>
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
					style="height: 1px; border: none; border-top: 1px dashed #0066CC;" />
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['x'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['x']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['name'] = 'x';
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<a href="__CONTROLLER__/article/id/<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['title'];?>
</a>
						</h3>
						
					</div>
					<div class="item_fenlei">
						<span>作者：</span><a><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['author'];?>
</a> <span><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['posttime'];?>
</span>
					</div>
					<hr
						style="height: 1px; border: none; border-top: 1px dashed #0066CC;" />
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
						<li><a href="__CONTROLLER__/article_list/cid/<?php echo $_smarty_tpl->tpl_vars['cate_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['name'];?>
</a></li>
                        <?php endfor; endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="fenye">
            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

		</div>
	</div>
</body>
</html><?php }} ?>