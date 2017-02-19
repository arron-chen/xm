<?php /* Smarty version Smarty-3.1.6, created on 2017-02-19 15:34:37
         compiled from "./Application/Home/View\Index\article.html" */ ?>
<?php /*%%SmartyHeaderCode:474758a94a8d8fc9c6-21387750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6993699af0d972eddeb715c1139ec7eed11695b' => 
    array (
      0 => './Application/Home/View\\Index\\article.html',
      1 => 1487484642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '474758a94a8d8fc9c6-21387750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a94a8d9732e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a94a8d9732e')) {function content_58a94a8d9732e($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>文章展示</title>
    
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        .whole {
            margin: 0 auto;
            width: 980px;
        }

        .logo {

            height: 120px;
        }

        .lanmu {
            background-color: #fff;
            margin:5px 0 5px 0;
        }

        .lanmu a {
            text-decoration:none;
            font-size: 17px;
            font-family: "楷体";
            line-heigth: 17px;
        }

        .lanmu span {
            font-size: 16px;
            font-family: "楷体";
            line-heigth: 15px;
        }

        .main {

            border: solid 1px #ccc;
            border: solid 1px #ccc;
        }

        .title {
            margin:0 auto;
            text-align:center;
            margin-top: 20px;

        }
        .title_nav{margin-top:15px;font-size:14px;font-family:"楷体"}

        .digest {
            margin:0 auto;
            text-align:center;
            margin-top: 20px;
            margin-bottom:20px;
            width:94%;
        }
        .digest_content{margin:10px 0 10px 0;}

        .content  {
            margin: 0 auto;
            margin-top:10px;
            margin-bottom:20px;

            width: 95%;
            height:100%;
        }
        .content_box{}

        .footer {
            margin:0 auto;
            margin-top:10px;
            text-align:center;
            color:#6a6a6a;
            font-size:14px;

        }
    </style>
    
</head>
<body>
<div class="whole">
    <div class="logo">
        <img  src="__PUBLIC__/Home/images/article_banner/art_banner6.png"  width="980px" height="120px"/>
    </div>
    <div class="lanmu">
        <a href="__CONTROLLER__/Index/index" target="_self">首页</a>&nbsp;<span>></span>&nbsp;<a><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['name'];?>
</a>
    </div>
    <div class="main">
        <div class="title">
            <h3><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['title'];?>
</h3>
            <div class="title_nav"><span><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['posttime'];?>
</span><span>&nbsp;|&nbsp;</span><span>作者：<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['author'];?>
</span>
                <span>&nbsp;|&nbsp;</span><span>来源：<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['resource'];?>
</span></div>
        </div>

        <div class="digest">
            <hr style="height:1px;border:none;border-top:1px dashed #0066CC;" />
            <div class="digest_content"><p>&nbsp;</p></div>
            <hr style="height:1px;border:none;border-top:1px dashed #0066CC;" />
        </div>

        <div class="content">
            <div class="content_box"><p><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['body'];?>
</p></div>
        </div>
    </div>
    <div class="footer">
			<span>© 2003 - 2016 Jiangxi University Of Science And Technology home. All Rights Reserved
江西理工大学树人网 版权所有</span>
    </div>
</div>
</body>
</html><?php }} ?>