<?php /* Smarty version Smarty-3.1.6, created on 2017-02-18 22:52:21
         compiled from "./Application/Admin/View\Article\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1782858a80b99295d23-55841086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0532226c924fa3b5c9769764f69f569a37a204d3' => 
    array (
      0 => './Application/Admin/View\\Article\\add.html',
      1 => 1487429538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1782858a80b99295d23-55841086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a80b9951314',
  'variables' => 
  array (
    'posttime' => 0,
    'cinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a80b9951314')) {function content_58a80b9951314($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\PHPServer\\www\\xm\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html   >
<html>
<head>
    <title>添加文章</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="__PUBLIC__/Admin/css/mine.css" type="text/css" rel="stylesheet">
    
    <style>
        * {
            margin: 0 auto;
            padding: 0px;
        }

        .whole {
            width: 99%;
            margin-left: auto;
            margin-right: auto;
        }


        #maintable h3 {
            color: #fff;
            margin-left: 10%;
        }



        .mulu {
            background-color: #E8F2FC;
        }

        .mulu td {
            line-height: 20px;
        }

        .td1 {
            width: 50%;
        }

        .neirong {
            margin-top: 10px;

            text-align: center;
            width: 97%;
            border: solid 1px #E8F2FC;
            position:relative;
        }
        .input{height:80px;width:96%;position:relative;;bottom:4%;}
    </style>
    
    <script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.all.js"></script>
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：文章管理-》添加文章</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="__MODULE__/Article/showlist">【返回】</a>
                </span>
            </span>
</div>
<div></div>


<div class="whole"  style="font-size: 13px;margin: 10px 5px">


        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="" />
            <input type="hidden" name="posttime" id="posttime" value="<?php echo $_smarty_tpl->tpl_vars['posttime']->value;?>
" />
            <table>
                <tr class="mulu">
                    <td class="td1"><a>文章标题:</a></td>
                    <td><input type="text" name="title" id="title" value="" /></td>
                    <td class="td1"><a>所属栏目：</a></td>
                    <td>
                        <select name="cid">
                            <option value="0">请选择</option>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['cinfo']->value,'value'=>($_smarty_tpl->tpl_vars['cinfo']->value)),$_smarty_tpl);?>

                        </select>
                      </td>

                </tr>
                <tr class="mulu">
                    <td class="td1">作者:</td>
                    <td><input type="text" name="author" id="author" value="" /></td>
                    <td class="td1">来源:</td>
                    <td><input type="text" name="resource" id="resource" value="" /></td>
                </tr>

            </table>


            <div class="neirong">
                <script name="body" id="body" type="text/plain"></script>
                <script type="text/javascript">
                    var ue= UE.getEditor(body);
                </script>
            </div>
            <div class="input"><input type="submit" name="submit" value="提交" /> <input
                    type="reset" name="reset" value="取消" /></div>


        </form>


</div>
</body>
</html><?php }} ?>