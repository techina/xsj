<?php /* Smarty version Smarty-3.1.11, created on 2014-05-12 18:34:30
         compiled from "D:\netbeans\yii\home\protected\views\tpl\admin\psys\index.html" */ ?>
<?php /*%%SmartyHeaderCode:229775370a0cdb02ca1-31225316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e9e3fe94c3221d542cf86d8a60a0070e532559e' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\admin\\psys\\index.html',
      1 => 1399890795,
      2 => 'file',
    ),
    '0a79f929570610f7e5ffb9099079fa26a871c1d4' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\comm\\mbase.html',
      1 => 1399641844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229775370a0cdb02ca1-31225316',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5370a0cdcc7f10_45513121',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5370a0cdcc7f10_45513121')) {function content_5370a0cdcc7f10_45513121($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="pragma" content="no-cach" /> 
		<meta http-equiv="cache-control" content="no-cache" /> 
		<meta http-equiv="expires" content="0" />
        <title>管理后台-角色管理</title>
    
        <link rel="stylesheet" href="./css/admin/index.css" type="text/css" />
        <link type="text/css" rel="stylesheet" href="./css/admin/comm.css">
    
    
<link href="./css/admin/simple.css" rel="stylesheet" type="text/css">

    
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
                <li id="left_tab3"  onclick="javascript:border_left('TabPage2', 'left_tab3');">用户</li>
                <li id="left_tab4"  onclick="javascript:border_left('TabPage2', 'left_tab4');">个人</li>
                <li id="left_tab5" class="Selected" onclick="javascript:border_left('TabPage2', 'left_tab5');">权限</li>

            </ul>
            <div id="left_menu_cnt">
                <ul id="dleft_tab1" style="display:none;">
                    <li class="now" ><a href="/index.php?r=admin/notice/">公告列表</a></li>
                    <li class="now" ><a href="/index.php?r=admin/notice/add">发布公告</a></li>
                </ul>
                <ul id="dleft_tab2" style="display: none;">
                    <li class="now"><a href="/index.php?r=admin/forum/">帖子列表</a></li>
                </ul>
                <ul id="dleft_tab3" style="display: none;">
                    <li class="now"><a href="/index.php?r=admin/users/">用户列表</a></li>
                    <li class="now"><a href="/index.php?r=admin/users/add">添加用户</a></li>
                    <li class="now"><a href="/index.php?r=admin/users/import">导入用户</a></li>
                </ul>
                <ul id="dleft_tab4" style="display: none;">
                    <li class="now"><a href="/index.php?r=users/wd"  >修改密码</a></li>
                </ul>
                <ul id="dleft_tab5" style="display:inline">
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
                
<form action='/index.php?r=admin/psys/update' method="post">
<table class="comm_table">
<colgroup>
<col width="15%"></col>
<col width="80%"></col>

</colgroup>
<thead>
<tr>
<th colspan="4">角色管理</th>
</tr>
</thead>
<tbody id="tbodydom">
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
<tr>
<th style="text-align: center;">◆ 用户名称:</th>
<th>
<?php echo $_smarty_tpl->tpl_vars['p']->value['username'];?>

<input type='hidden' name='un' value='<?php echo $_smarty_tpl->tpl_vars['p']->value['username'];?>
'>
</th>
</tr>
<tr>
<th colspan="2" style="padding-left: 60px">◆ 角色：( <font color='red'>勾选表示拥有此角色，取消勾选表示删除用户此角色</font> )</th>
</tr>
<tr>
<th colspan="2">
<ul id="powerall">
<?php  $_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['powerall']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->key => $_smarty_tpl->tpl_vars['ps']->value){
$_smarty_tpl->tpl_vars['ps']->_loop = true;
?>
<li>
<input type="checkbox" name='power[]' class='pow' value='<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
'> 
<a href='./index.php?r=admin/category/info&id=<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
' target="_blank"><?php echo $_smarty_tpl->tpl_vars['ps']->value['cname'];?>
</a>
</li>
<?php } ?>
</ul>
</th>
</tr>
<?php } ?>
</tbody>
<tfoot>
<tr><td colspan="2" class="text-center"><input type="image" src="./image/tijiao.png"></td></tr>
</tfoot>
</table>
</form>
<input type="hidden" id="catepower" value='<?php echo $_smarty_tpl->tpl_vars['power']->value;?>
'>

            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
    
    
<script type="text/javascript" src="./js/admin/psys.js"></script>

</body>
</html><?php }} ?>