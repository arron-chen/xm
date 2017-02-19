<?php /* Smarty version Smarty-3.1.6, created on 2017-02-18 18:48:00
         compiled from "./Application/Admin/View\Article\cateupd.html" */ ?>
<?php /*%%SmartyHeaderCode:1637058a8245f322692-86078077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '763920c753e852a9c1a0debbdfedaad93409f96b' => 
    array (
      0 => './Application/Admin/View\\Article\\cateupd.html',
      1 => 1487414875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1637058a8245f322692-86078077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a8245f373cd',
  'variables' => 
  array (
    'cid' => 0,
    'info' => 0,
    'rinfo' => 0,
    'pid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a8245f373cd')) {function content_58a8245f373cd($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\PHPServer\\www\\xm\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html   >
<html>
<head>
    <title>修改管理员信息</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="__PUBLIC__/Admin/css/mine.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：栏目管理-》修改栏目信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/cateshow">【返回】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px;margin: 10px 5px">
    <form action="__SELF__" method="post" enctype="multipart/form-data">
        <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
"/>
        <table border="1" width="100%" class="table_a">
            <tr>
                <td>栏目名称</td>
                <td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
" /></td>
            </tr>
            <td>父栏目</td>
            <td>
                <select name="pid">
                    <option value="0">请选择</option>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['rinfo']->value,'selected'=>$_smarty_tpl->tpl_vars['pid']->value),$_smarty_tpl);?>

                </select>
            </td>
            </tr>


            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="提交">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html><?php }} ?>