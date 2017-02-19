<?php /* Smarty version Smarty-3.1.6, created on 2017-02-18 19:05:03
         compiled from "./Application/Admin/View\Article\cateadd.html" */ ?>
<?php /*%%SmartyHeaderCode:1458158a81764559f73-56977557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c9dc61940886865cb78b26e1f512ca409c87791' => 
    array (
      0 => './Application/Admin/View\\Article\\cateadd.html',
      1 => 1487415873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1458158a81764559f73-56977557',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a817645bcd1',
  'variables' => 
  array (
    'pinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a817645bcd1')) {function content_58a817645bcd1($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\PHPServer\\www\\xm\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html   >
<html>
<head>
    <title>添加栏目</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="__PUBLIC__/Admin/css/mine.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：分类管理-》添加栏目</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="__MODULE__/Article/cateshow">【返回】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px;margin: 10px 5px">
    <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
        <input type="hidden" name="cid"/>
        <table border="1" width="100%" class="table_a">
            <tr>
                <td>栏目名称</td>
                <td><input type="text" name="name" /></td>
            </tr>

            <tr>
                <td>父栏目名称</td>
                <td>
                    <select name="pid">
                        <option value="0">请选择</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['pinfo']->value,'value'=>($_smarty_tpl->tpl_vars['pinfo']->value)),$_smarty_tpl);?>

                    </select>
                </td>
            </tr>


            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="添加">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html><?php }} ?>