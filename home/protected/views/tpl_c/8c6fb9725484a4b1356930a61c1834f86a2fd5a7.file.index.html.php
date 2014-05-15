<?php /* Smarty version Smarty-3.1.11, created on 2014-05-12 16:51:15
         compiled from "D:\netbeans\yii\home\protected\views\tpl\admin\users\index.html" */ ?>
<?php /*%%SmartyHeaderCode:31063537086df562954-17078152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c6fb9725484a4b1356930a61c1834f86a2fd5a7' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\admin\\users\\index.html',
      1 => 1399884672,
      2 => 'file',
    ),
    '0a79f929570610f7e5ffb9099079fa26a871c1d4' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\comm\\mbase.html',
      1 => 1399641844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31063537086df562954-17078152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_537086df70c641_03957620',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537086df70c641_03957620')) {function content_537086df70c641_03957620($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="pragma" content="no-cach" /> 
		<meta http-equiv="cache-control" content="no-cache" /> 
		<meta http-equiv="expires" content="0" />
        <title>管理后台-用户列表</title>
    
        <link rel="stylesheet" href="./css/admin/index.css" type="text/css" />
        <link type="text/css" rel="stylesheet" href="./css/admin/comm.css">
    
    
<link href="./css/admin/nav.css" rel="stylesheet" type="text/css">

    
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
                
<table class="comm_table">
<colgroup>
<col width="8%"></col>
<col width="25%"></col>
<col width="13%"></col>
<col width="20%"></col>
<col width="10%"></col>
<col width="27%"></col>
</colgroup>
<thead>
<tr>
<th colspan="6">用户列表</th>
</tr>
</thead>
<tbody id="tbodydom">
<tr>
<th style="text-align: center;"></th>
<th>用户名</th>
<th>真实姓名</th>
<th>邮箱</th>
<th>状态</th>
<th>操作</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
<tr id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">
<td>
<img src="<?php echo $_smarty_tpl->tpl_vars['p']->value['userpic'];?>
" width='50px' height='50px'>
</td>
<td>
<a href="./index.php?r=forum&un=<?php echo $_smarty_tpl->tpl_vars['p']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['username'];?>
</a>
</td>
<td>
<a href="./index.php?r=forum&un=<?php echo $_smarty_tpl->tpl_vars['p']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['rname'];?>
</a>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['p']->value['useremail'];?>
</td>
<td><?php if ($_smarty_tpl->tpl_vars['p']->value['islock']==1){?>已锁定<?php }else{ ?>正常<?php }?></td>
<td>
<?php if ($_smarty_tpl->tpl_vars['p']->value['isapply']==1){?>
<span id="apply<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">[ <a href='javascript:;' onclick="javascript:markpwd(<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
)" >重置密码</a> ] </span><?php }?>
[ <a href='./index.php?r=admin/psys&un=<?php echo $_smarty_tpl->tpl_vars['p']->value['username'];?>
' target="_blank">角色管理</a> ]
<?php if ($_smarty_tpl->tpl_vars['p']->value['islock']==0){?>
[ <a href='javascript:;' onclick="javascript:marklock(<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
,1)">锁定</a> ] <?php }else{ ?>
[ <a href='javascript:;' onclick="javascript:marklock(<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
,0)">解锁</a> ] <?php }?>
[ <a href='javascript:;' onclick="javascript:deleteuser(<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
)">删除</a> ]
</td>
</tr>
<?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
<tr>
<td colspan="6" style="text-align:center">暂时没有数据...</td>
</tr>
<?php } ?>
</tbody>
<tfoot>
<tr>
<th colspan="6">
<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

</th>
</tr>
<th colspan="6">
<a href="./index.php?r=admin/users/add"  id="webinfosubmit">添加用户</a>
</th>
</tr>
</tfoot>
</table>

            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
    
    
</body>
</html><?php }} ?>