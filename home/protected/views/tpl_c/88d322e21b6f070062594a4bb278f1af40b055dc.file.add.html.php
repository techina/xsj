<?php /* Smarty version Smarty-3.1.11, created on 2014-05-14 17:50:11
         compiled from "D:\netbeans\yii\home\protected\views\tpl\admin\users\add.html" */ ?>
<?php /*%%SmartyHeaderCode:606153733c5340b083-59157709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88d322e21b6f070062594a4bb278f1af40b055dc' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\admin\\users\\add.html',
      1 => 1398310426,
      2 => 'file',
    ),
    '0a79f929570610f7e5ffb9099079fa26a871c1d4' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\comm\\mbase.html',
      1 => 1399641844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '606153733c5340b083-59157709',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53733c53674415_92471144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53733c53674415_92471144')) {function content_53733c53674415_92471144($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="pragma" content="no-cach" /> 
		<meta http-equiv="cache-control" content="no-cache" /> 
		<meta http-equiv="expires" content="0" />
        <title>管理后台-添加用户</title>
    
        <link rel="stylesheet" href="./css/admin/index.css" type="text/css" />
        <link type="text/css" rel="stylesheet" href="./css/admin/comm.css">
    
    
<link rel="stylesheet" href="./css/admin/register.css" type="text/css">

    
        <script type="text/javascript" src="./js/jquery.js"></script>
        <script src="./js/admin/menu.js" type="text/javascript"></script>
        <script type="text/javascript" src="./js/admin/nav.js"></script>
    
</head>
<body>
    <dl id="header">
        <dd>
        <li>欢迎你： <?php echo $_SESSION['userinfo']['rname'];?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li><a href="./index.php?r=index" target="_blank">网站首页</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</li>
        <li><a href="./index.php?r=admin/index"  >后台首页</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</li>
        <li><a href="./index.php?r=index/logout">退出登录</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
    </dd>
</dl>
<div id="contents">
    <div class="left">
        <div class="menu" id="TabPage3"><br />
            <ul id="TabPage2">
                <li id="left_tab1"  onclick="javascript:border_left('TabPage2', 'left_tab1');">公告</li>
                <li id="left_tab2"  onclick="javascript:border_left('TabPage2', 'left_tab2');">帖子</li>
                <li id="left_tab3" class="Selected" onclick="javascript:border_left('TabPage2', 'left_tab3');">用户</li>
                <li id="left_tab4"  onclick="javascript:border_left('TabPage2', 'left_tab4');">个人</li>
                <li id="left_tab5"  onclick="javascript:border_left('TabPage2', 'left_tab5');">权限</li>

            </ul>
            <div id="left_menu_cnt">
                <ul id="dleft_tab1" style="display:none;">
                    <li class="now" ><a href="/index.php?r=admin/notice/">公告列表</a></li>
                    <li class="now" ><a href="/index.php?r=admin/notice/add">发布公告</a></li>
                </ul>
                <ul id="dleft_tab2" style="display: none;">
                    <li class="now"><a href="/index.php?r=admin/forum/">帖子列表</a></li>
                </ul>
                <ul id="dleft_tab3" style="display:inline">
                    <li class="now"><a href="/index.php?r=admin/users/">用户列表</a></li>
                    <li class="now"><a href="/index.php?r=admin/users/add">添加用户</a></li>
                    <li class="now"><a href="/index.php?r=admin/users/import">导入用户</a></li>
                </ul>
                <ul id="dleft_tab4" style="display: none;">
                    <li class="now"><a href="/index.php?r=users/wd"  >修改密码</a></li>
                </ul>
                <ul id="dleft_tab5" style="display: none;">
                    <li class="now"><a href="/index.php?r=admin/category">角色管理</a></li>
                    <li class="now"><a href="/index.php?r=admin/power">操作管理</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="menu_end"></div>
    </div>
    <div class="right">

        <div id="cnt">
            <div id="dTab1" class="Box">
                
<form method="post" action="/index.php?r=admin/users/reg" onsubmit="return dosubmit()">
<input type='hidden' name='r' value='admin/users/reg'>
<table style="width:770px;margin: auto 100px;">
	<tr>
		<td style="text-align: center; height: 50px;" colspan="2">&nbsp;
		</td>
	</tr>
	<tr>
		<td style="text-align: center; height: 50px;" colspan="2">&nbsp;
		</td>
	</tr>
	<tr>
		<td class="td-left">账号：</td>
		<td class="td-right"><input type="text" id="name" name="uname"
			class="input" onfocus="javascript:getfous(1)"
			onblur="return namelost()">
		<div id="namemes" class="innerhtml"></div>
		</td>
	</tr>
	<tr>
		<td class="td-left">真实姓名：</td>
		<td class="td-right"><input type="text" id="rname" name="rname"
			class="input" >
		</td>
	</tr>
	<tr>
		<td class="td-left">密码：</td>
		<td valign="top" class="td-right"><input type="password" id="pwd"
			name="upwd" class="input" onfocus="javascript:getfous(2)"
			onblur="return lostfocus(1)">
		<div id="pwdmes" class="innerhtml"></div>
		</td>
	</tr>
	<tr>
		<td class="td-left">确认密码：</td>
		<td class="td-right"><input type="password" id="againpwd"
			class="input" onfocus="javascript:getfous(3)"
			onblur="return lostfocus(2)">
		<div id="againmes" class="innerhtml"></div>
		</td>
	</tr>
	<tr>
		<td class="td-left">邮箱：</td>
		<td class="td-right"><input type="text" id="email" name="uemail"
			class="input" onfocus="javascript:getfous(4)"
			onblur="return emaillost()">
		<div id="emailmes" class="innerhtml"></div>
		</td>
	</tr>
	<tr>
		<td class="td-left">类型：</td>
		<td class="td-right">
	<select name="utype" style="margin-top:10px">
	<option value='ordinary' selected>普通用户</option>
	<option value='admin'>管理员</option>
	</select>
		</td>
	</tr>
	<tr>
		<td style="text-align: center; height: 50px;" colspan="2">&nbsp;
		</td>
	</tr>

	<tr>
		<td style="text-align: center; height: 50px;" colspan="2"><input
			type="submit" class="submit" value=' '></td>
	</tr>
	<tr>
		<td colspan="2" style="float: left; height: 30px;"></td>
	</tr>
</table>
</form>

            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
    
    
<script src="./js/admin/register.js" type="text/javascript"></script>

</body>
</html><?php }} ?>