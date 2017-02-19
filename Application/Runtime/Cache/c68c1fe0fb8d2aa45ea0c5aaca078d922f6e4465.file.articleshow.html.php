<?php /* Smarty version Smarty-3.1.6, created on 2017-02-19 13:37:58
         compiled from "./Application/Admin/View\Article\articleshow.html" */ ?>
<?php /*%%SmartyHeaderCode:42458a83eeb00df73-31542747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c68c1fe0fb8d2aa45ea0c5aaca078d922f6e4465' => 
    array (
      0 => './Application/Admin/View\\Article\\articleshow.html',
      1 => 1487476788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42458a83eeb00df73-31542747',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a83eeb07525',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a83eeb07525')) {function content_58a83eeb07525($_smarty_tpl) {?><!DOCTYPE html   >
<html>
<head>
    <title>修改文章</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="__PUBLIC__/Admin/css/mine.css" type="text/css" rel="stylesheet">
    
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        .whole {
            margin: 0 auto;
            width: 98%;
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

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：文章管理-》文章展示</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="__MODULE__/Article/showlist">【返回】</a>
                </span>
            </span>
</div>
<div></div>

<div class="whole">

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
            <!--    1.ueditor使用转义问题解决
                   直接在ThinkPHP的conf文件夹目录下找到ThinkPHP的配置文件Convention.php这个文件，
                   然后找到DEFAULT_FILTER选项，注释掉这个，禁用掉TP的自动转义功能，就OK了。
                   -->
        </div>
        <div class="footer">

        </div>
    </div>
</div>
</body>
</html><?php }} ?>