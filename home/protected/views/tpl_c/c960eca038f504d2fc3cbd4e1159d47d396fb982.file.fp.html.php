<?php /* Smarty version Smarty-3.1.11, created on 2014-05-09 15:39:23
         compiled from "/var/www/yii/protected/views/tpl/cli/fp/fp.html" */ ?>
<?php /*%%SmartyHeaderCode:1411002249536c862bb75f94-86928922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c960eca038f504d2fc3cbd4e1159d47d396fb982' => 
    array (
      0 => '/var/www/yii/protected/views/tpl/cli/fp/fp.html',
      1 => 1398149209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1411002249536c862bb75f94-86928922',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_536c862bccc471_13339424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536c862bccc471_13339424')) {function content_536c862bccc471_13339424($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>找回密码</title>
<link rel="stylesheet" href="./css/cli/repwd.css" type="text/css">
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/cli/repwd.js"></script>
</head>

<body>
<center>
<div class="dmain">
<form action="./index.php" id="re" onsubmit="return urepwd()">
<input type='hidden' name='r' value="fp/check"/>
<table border="0" align="center">
	<tr>
		<td colspan="2" class="f">申请重置密码</td>
	</tr>
	<tr>
		<td style="text-align: center">E-mail:</td>
		<td><input type="text" name="email" id="email" /></td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center"><span
			style="color: red; font-size: 14px">(注 * 只有通过邮箱验证的账号才能申请)</span></td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center;"><input type="submit"
			value="提交" id="tijiao"></td>
	</tr>
</table>
</form>
<p>&nbsp;&nbsp;&nbsp;<a href="/index.php">点这里返回登录……</a></p>
<hr align="center" style="whdth: 80%">
<dl>
	<dd><span>申请提交后请耐心等待，并及时联系管理员</span></dd>
</dl>

</div>
</center>
</body>
</html>
<?php }} ?>