<?php /* Smarty version Smarty-3.1.11, created on 2014-05-08 14:31:59
         compiled from "/var/www/yii/protected/views/tpl/cli/users/perinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:39169538536b24df1ada45-14345089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c9510cd684789564427c57b9dd3c91764d356c9' => 
    array (
      0 => '/var/www/yii/protected/views/tpl/cli/users/perinfo.html',
      1 => 1398396433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39169538536b24df1ada45-14345089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_536b24df1f7501_44773936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536b24df1f7501_44773936')) {function content_536b24df1f7501_44773936($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
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
<tr><td  style="text-align: right;padding-right: 10px">级别：</td><td><?php if ($_smarty_tpl->tpl_vars['p']->value['userlevel']=='ordinary'){?>普通用户<?php }else{ ?>管理员<?php }?></td></tr>
<tr><td  style="text-align: right;padding-right: 10px">状态：</td><td>正常</td></tr>
</table>
<?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
<p style="margin:20px 0px 0px 30px">暂时没有数据……</p>
<?php } ?><?php }} ?>