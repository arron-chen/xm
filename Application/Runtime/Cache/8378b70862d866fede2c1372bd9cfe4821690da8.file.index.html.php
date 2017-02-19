<?php /* Smarty version Smarty-3.1.6, created on 2017-02-19 15:44:28
         compiled from "./Application/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1241358a070f8240fa6-53373472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8378b70862d866fede2c1372bd9cfe4821690da8' => 
    array (
      0 => './Application/Home/View\\Index\\index.html',
      1 => 1487490266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1241358a070f8240fa6-53373472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a070f83215b',
  'variables' => 
  array (
    'art_data' => 0,
    'art_data1' => 0,
    'art_data2' => 0,
    'art_data3' => 0,
    'art_data4' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a070f83215b')) {function content_58a070f83215b($_smarty_tpl) {?><!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>江西理工大学校媒联盟</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/css/style.css"/>
</head>

<div id="whole">
    <div id="menu" class="menu">
        <ul class="comWidth">
            <img src="__PUBLIC__/Home/images/logo1.png" class="fl" width="45px" height="45px"/><span
                class="fl">校媒联盟</span>
            <li><a href="index.php">首页</a></li>
            <li><a href="#">联盟活动</a></li>
            <li><a href="__CONTROLLER__/platform">平台风采</a></li>
            <li><a href="__CONTROLLER__/article/id/34">校媒之星</a></li>
            <li><a href="__CONTROLLER__/article_list/cid/6">服务专区</a></li>
            <li><a href="__CONTROLLER__/article_list/cid/6">投稿专区</a></li>
            <li><a href="__CONTROLLER__/article_list/cid/1">通知公告</a></li>
            <li><a href="__CONTROLLER__/aboutus">关于我们</a></li>
        </ul>
    </div>
    <div id="banner" class="banner">
        <div class="bg1"></div>
        <div class="bg2"></div>
    </div>
    <!-----图片轮播代码----->
    <div id="banner1" class="banner1 comwidth">
        <div class="tupian">

            <div id="demo-1" class="slideBox">
                <ul class="items">
                    <li><a href="__CONTROLLER__/article/id/46" title="迎新进行时"><img src="__PUBLIC__/Home/images/banner/1.jpg"
                                                                            width="560px" height="300px"/></a></li>
                    <li><a href="__CONTROLLER__/article/id/47" title="对不起，我还是要去江理。"><img
                            src="__PUBLIC__/Home/images/banner/2.jpg" width="560px" height="300px"/></a></li>
                    <li><a href="__CONTROLLER__/article/id/48" title="这是我的理工24小时"><img
                            src="__PUBLIC__/Home/images/banner/3.jpg" width="560px" height="300px"/></a></li>
                    <li><a href="__CONTROLLER__/article/id/49" title="文心杯征文大赛"><img src="__PUBLIC__/Home/images/banner/4.jpg"
                                                                              width="560px" height="300px"/></a></li>
                    <li><a href="__CONTROLLER__/article/id/50" title="理工学子开发寻亲系统"><img
                            src="__PUBLIC__/Home/images/banner/5.jpg" width="560px" height="300px"/></a></li>
                </ul>
            </div>

            <script src="__PUBLIC__/Home/js/pic1/jquery.min.js" type="text/javascript"></script>
            <script src="__PUBLIC__/Home/js/pic1/jquery.slideBox.min.js" type="text/javascript"></script>
            
            <script>
                jQuery(function ($) {
                    $('#demo-1').slideBox({duration: 0.4, delay: 5,});
                    $('#demo-2').slideBox({
                        direction: 'top',//left,top#方向
                        duration: 0.3,//滚动持续时间，单位：秒
                        easing: 'linear',//swing,linear//滚动特效
                        delay: 5,//滚动延迟时间，单位：秒
                        startIndex: 1//初始焦点顺序
                    });
                });
            </script>
            
            <div style="text-align:center;clear:both"></div>
        </div>

        <!----- 功能模块----->
        <div class="function">
            <div class="func_box">
                <div class="func_push">
                    <ul>
                        <li style="background-color:#222222;margin-top:6px;"><a
                                href="__CONTROLLER__/article/id/43">江理版《小幸运》</a></li>
                        <li style="background-color:#218ead;margin-top:8px;"><a
                                href="__CONTROLLER__/article/id/44">又是一年开学毕业季</a></li>
                        <li style="background-color:#222222;margin-top:8px;"><a
                                href="__CONTROLLER__/article/id/45">#有种青春叫宿舍#</a></li>
                    </ul>
                </div>

                <!-------功能块代码-------->
                <div class="func_show">
                    <div class="func-box">
                        <div id="func-box-left">
                            <div class="func-box-1"></div>
                            <div class="func-box-2"></div>
                            <div class="func-box-3"></div>
                        </div>
                        <div id="func-box-middle">
                            <div class="func-box-4"></div>
                            <div class="func-box-5"></div>
                            <div class="func-box-6"></div>
                        </div>
                        <div id="func-box-right">
                            <div class="func-box-7"></div>
                            <div class="func-box-8"></div>
                        </div>
                    </div>
                </div>
                <!-------功能块end-------->
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <!------------------>
    <div id="rongqi" class="rongqi comwidth">
        <div id="model1" class="model1">
            <div class="model1-hd">
                <div width="250">
                    <hr color="#CDCDCD" size="1"/>
                </div>
                <div class="model1-hd-span">
                    <h2>资讯</h2>
                </div>
                <hr align="left" width="100%" color="#CDCDCD" size="4"/>
            </div>
            <div class="model1-left fl">
                <h3>
                    <div class="left-box-line fl"></div>
                    &nbsp;<a>校园通告</a>
                </h3>
                <div class="left-box">
                    <ul>
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
                        <li><a href="__CONTROLLER__/article/id/<?php echo $_smarty_tpl->tpl_vars['art_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['title'];?>
</a></li>
                        <?php endfor; endif; ?>

                    </ul>

                </div>
            </div>
            <div class="model1-middle fl">
                <h3>
                    <div class="left-box-line fl"></div>
                    &nbsp;联盟资讯
                </h3>
                <div class="left-box">
                    <ul>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['x'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['x']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['name'] = 'x';
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['art_data1']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <li><a href="__CONTROLLER__/article/id/<?php echo $_smarty_tpl->tpl_vars['art_data1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art_data1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['title'];?>
</a></li>
                        <?php endfor; endif; ?>
                    </ul>
                </div>
            </div>
            <div class="model1-right fl">
                <h3>
                    <div class="left-box-line fl"></div>
                    &nbsp;媒体聚焦
                </h3>
                <div class="left-box">
                    <ul>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['x'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['x']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['name'] = 'x';
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['art_data2']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <li><a href="__CONTROLLER__/article/id/<?php echo $_smarty_tpl->tpl_vars['art_data2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art_data2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['title'];?>
</a></li>
                        <?php endfor; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div style="text-align:center;clear:both"></div>
        <div id="model2" class="model2">
            <div class="model2-hd">
                <div class="model2-hd-span">
                    <h2>校媒</h2>
                </div>
                <hr align="left" width="100%" color="#CDCDCD" size="4"/>
            </div>
            <div class="model2-left fl">

                <div class="model2-left-title">
                    <div class="model2-left-title1 fl">
                        <div class="model2-right-showline fl"></div>
                        &nbsp;<a>校媒之星</a>
                    </div>
                    <div class="model2-left-title2 fl">
                        <div class="model2-right-showline fl"></div>
                        &nbsp;<a>联盟动态</a>
                    </div>
                </div>
                <div class="model2-left-box">
                    <div class="model2-left-box1">
                        <script src="__PUBLIC__/Home/js/model2-left-show.js" type="text/javascript"></script>
                        <div class="model2-left-box-1 "><img src="__PUBLIC__/Home/images/model-box/1.jpg" width="100px"
                                                             height="180"/>
                            <ul style="list-style:none">
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['x'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['x']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['name'] = 'x';
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['art_data3']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <li><a href="__CONTROLLER__/article/id/<?php echo $_smarty_tpl->tpl_vars['art_data3']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art_data3']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['title'];?>
</a></li>
                                <?php endfor; endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="model2-left-box1">
                        <div class="model2-left-box-1"><img src="__PUBLIC__/Home/images/model-box/2.jpg" width="100px"
                                                            height="180"/>
                            <ul style="list-style:none">
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['x'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['x']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['name'] = 'x';
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['art_data4']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <li><a href="__CONTROLLER__/article/id/<?php echo $_smarty_tpl->tpl_vars['art_data4']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art_data4']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['title'];?>
</a></li>
                                <?php endfor; endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="model2-left-show">
                    <div class="model2-left-show">
                        <div class="model2-left-show-box">

                            <div id="demo"
                                 style="overflow: hidden;width:580px; margin:0px auto; color: #ffffff; height: 130px"
                                 onmousemove="MoveOutDiv();" onmouseout="MoveDiv(event);">
                                <div id="demo1" style="width:100%;height:160px">
                                    <table cellSpacing=0 cellPadding=0>
                                        <tbody>
                                        <tr vAlign=top>
                                            <td vAlign=top noWrap>
                                                <div align=right><img
                                                        src="__PUBLIC__/Home/images/model2-show/1.jpg"><img
                                                        src="__PUBLIC__/Home/images/model2-show/2.jpg"><img
                                                        src="__PUBLIC__/Home/images/model2-show/3.jpg"><img
                                                        src="__PUBLIC__/Home/images/model2-show/4.jpg"><img
                                                        src="__PUBLIC__/Home/images/model2-show/5.jpg"><img
                                                        src="__PUBLIC__/Home/images/model2-show/6.jpg"></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                    <td width="0">
                                        <div id="demo2" style="width:100%;"></div>
                                    </TD>
                                    </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="model2-right fl">
                <div class="model2-right-fuwu">
                    <div class="model2-right-fuwubox">
                        <div class="model2-right-line fl"></div>
                        <h3>&nbsp;资料专区</h3>
                        <ul style="list-style:none">
                            <li style="margin-top:10px;"><a href="#" style="color:#ff7800;">校媒培训资料</a><a href="#">月度先进个人评选</a><a
                                    href="#">主席团竞聘</a><a href="#" style="color:#ff7800;">月度好新闻</a></li>
                            <li><a href="#" style="color:#ff7800;">校媒漂流本</a><a href="#">江西校媒竞选申请表</a><a href="#">校史馆</a><a
                                    href="#">校报征文</a></li>
                            <li><a href="#">图说价值观</a><a href="#">摄影展</a><a href="#" style="color:#ff7800;">电视台作品</a><a
                                    href="#">清江征文</a></li>
                            <li><a href="#">联盟简介</a><a href="#">校媒招新复试名单</a><a href="#">文心杯征文</a></li>

                        </ul>
                    </div>
                </div>
                <div class="model2-right-show">
                    <div class="model2-right-showtitle">
                        <div class="model2-right-showline fl"></div>
                        &nbsp;<a>热点专题</a></div>
                    <div class="model2-right-show1"><a href="http://www.jxustsrw.cn/zhuangti/2016sbd/"><img alt=""
                                                                                                            src="__PUBLIC__/Home/images/model2-right-show/2.jpg"
                                                                                                            width="220px"
                                                                                                            height="100px"></a>
                    </div>
                    <div class="model2-right-show2"><a href="http://www.2016xyh.jxustsrw.cn/"><img alt="激情校运"
                                                                                                   src="__PUBLIC__/Home/images/model2-right-show/1.jpg"
                                                                                                   width="220px"
                                                                                                   height="100px"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footer" class="footer">
        <div class="comWidth">
            <!-----友链----->
            <div class="footer-wrap">
                <div id="frend-link" class="fl ta-1">
                    <h3>友情链接</h3>
                    <hr align="left" width="250px" color="#505050" size="1"/>
                    <div class="mod-list">
                        <p><a href="http://www.chinaumu.org/">中国高校传媒联盟</a><a
                                href="http://www.cunmu.org/">中国高校新媒体联盟</a><a href="http://www.univs.cn/">中国大学生在线</a>
                        <p><a href="http://www.imooc.com/">慕课网</a><a href="http://iqingyun.cyol.com/">中国江西网</a><a
                                href="http://iqingyun.cyol.com/">青云平台</a></p>
                        <p><a href="http://www.jxustsrw.cn/">江西理工大学树人网</a></p>
                    </div>
                </div>
                <div id="about-us" class="fl ta-1 pianyi">
                    <h3>关于我们</h3>
                    <hr align="left" width="250px" color="#505050" size="1"/>
                    <div class="mod-list">
                        <p><a href="http://www.jxust.cn/">关于我们</a><a href="http://iqingyun.cyol.com/">加入我们</a><a
                                href="http://www.univs.cn/">意见反馈</a><a href="">网站导航</a></p>
                    </div>
                </div>
                <div id="contact-us" class="fl ta-1 pianyi">
                    <h3>联系我们</h3>
                    <div class="mod-list">
                        <p><a href="http://www.jxust.cn/">新浪微博</a><a href="http://iqingyun.cyol.com/">官方微信</a><a
                                href="http://www.univs.cn/"></a><a href="http://www.univs.cn/">本站邮箱</a></p>
                        <p><a href="">新浪邮箱</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
<?php }} ?>