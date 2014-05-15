<?php /* Smarty version Smarty-3.1.11, created on 2014-05-11 14:52:56
         compiled from "D:\netbeans\yii\home\protected\views\tpl\cli\users\perinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:7489536886f9e12f68-12211220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77a6938a04f7c95be6a958c74c99b7df8433bf37' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\cli\\users\\perinfo.html',
      1 => 1399791141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7489536886f9e12f68-12211220',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_536886f9e843f5_96142933',
  'variables' => 
  array (
    'info' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536886f9e843f5_96142933')) {function content_536886f9e843f5_96142933($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
<table style="height:150px;width:360px;margin:auto;border: none;" border="0">
<tr><td style="text-align: right;padding-right: 10px">账号：</td><td><a href="./index.php?r=forum&un=<?php echo $_SESSION['userinfo']['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['username'];?>
</a></td>
<td rowspan="5"><a href="./index.php?r=users/photo"><img src='<?php echo $_smarty_tpl->tpl_vars['p']->value['userpic'];?>
' alt='修改头像' style="width:100px;height:100px;border-radius:50px"></a></td></tr>
<tr><td  style="text-align: right;padding-right: 10px">姓名：</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value['rname'];?>
</td></tr>
<tr><td  style="text-align: right;padding-right: 10px">邮箱：</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value['useremail'];?>
</td></tr>
<tr><td  style="text-align: right;padding-right: 10px">状态：</td><td>正常</td></tr>
</table>
<?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
<p style="margin:20px 0px 0px 30px">暂时没有数据……</p>
<?php } ?><?php }} ?>