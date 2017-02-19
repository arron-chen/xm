<?php /* Smarty version Smarty-3.1.6, created on 2017-02-12 21:17:34
         compiled from "./Application/Admin/View\Index\left.html" */ ?>
<?php /*%%SmartyHeaderCode:940058a0606eeebd93-77370422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e78eb414bd5ccefea74bfad4105e0be48c2d9c5' => 
    array (
      0 => './Application/Admin/View\\Index\\left.html',
      1 => 1485774723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '940058a0606eeebd93-77370422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pauth_info' => 0,
    'v' => 0,
    'sauth_info' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a0606f04d0f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a0606f04d0f')) {function content_58a0606f04d0f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv=content-type content="text/html; charset=utf-8" />
    <link href="<?php echo @__PUBLIC__;?>
/Admin/css/admin.css" type="text/css" rel="stylesheet" />
    <script language=javascript>
        function expand(el)
        {
            childobj = document.getElementById("child" + el);

            if (childobj.style.display == 'none')
            {
                childobj.style.display = 'block';
            }
            else
            {
                childobj.style.display = 'none';
            }
            return;
        }
    </script>
</head>
<body>
<table height="100%" cellspacing=0 cellpadding=0 width=170
       background=<?php echo @__PUBLIC__;?>
/Admin/img/menu_bg.jpg border=0>
    <tr>
        <td valign=top align=middle>
            <table cellspacing=0 cellpadding=0 width="100%" border=0>

                <tr>
                    <td height=10></td></tr></table>

            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pauth_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <table cellspacing=0 cellpadding=0 width=150 border=0>

                <tr height=22>
                    <td style="padding-left: 30px" background=<?php echo @__PUBLIC__;?>
/Admin/img/menu_bt.jpg><a
                            class=menuparent onclick=expand("<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
")
                            href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</a></td></tr>
                <tr height=4>
                    <td></td>
                </tr>
            </table>

            <table id=child<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
 style="display: none" cellspacing=0 cellpadding=0
                   width=150 border=0>

                  <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sauth_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['vv']->value['auth_pid']==$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
                <tr height=20>
                    <td align=middle width=30><img height=9
                                                   src="<?php echo @__PUBLIC__;?>
/Admin/img/menu_icon.gif" width=9></td>
                    <td><a class=menuchild
                           href="<?php echo @__MODULE__;?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_c'];?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_a'];?>
"
                           target="right"><?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_name'];?>
</a></td>
                </tr>
                 <?php }?>
                  <?php } ?>
            </table>
       <?php } ?>

        </td>
        <td width=1 bgcolor=#d1e6f7></td>
    </tr>
</table>
</body>
</html><?php }} ?>