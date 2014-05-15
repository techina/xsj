<?php /* Smarty version Smarty-3.1.11, created on 2014-05-12 21:04:50
         compiled from "D:\netbeans\yii\home\protected\views\tpl\admin\forum\index.html" */ ?>
<?php /*%%SmartyHeaderCode:8728536f1e68212f47-96844935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '094319b27635105abaab6e456c59819396905d0d' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\admin\\forum\\index.html',
      1 => 1398310097,
      2 => 'file',
    ),
    '0a79f929570610f7e5ffb9099079fa26a871c1d4' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\comm\\mbase.html',
      1 => 1399641844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8728536f1e68212f47-96844935',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_536f1e68343a40_19827047',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536f1e68343a40_19827047')) {function content_536f1e68343a40_19827047($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="pragma" content="no-cach" /> 
		<meta http-equiv="cache-control" content="no-cache" /> 
		<meta http-equiv="expires" content="0" />
        <title>管理后台-帖子列表</title>
    
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
                <li id="left_tab2" class="Selected" onclick="javascript:border_left('TabPage2', 'left_tab2');">帖子</li>
                <li id="left_tab3"  onclick="javascript:border_left('TabPage2', 'left_tab3');">用户</li>
                <li id="left_tab4"  onclick="javascript:border_left('TabPage2', 'left_tab4');">个人</li>
                <li id="left_tab5"  onclick="javascript:border_left('TabPage2', 'left_tab5');">权限</li>

            </ul>
            <div id="left_menu_cnt">
                <ul id="dleft_tab1" style="display:none;">
                    <li class="now" ><a href="/index.php?r=admin/notice/">公告列表</a></li>
                    <li class="now" ><a href="/index.php?r=admin/notice/add">发布公告</a></li>
                </ul>
                <ul id="dleft_tab2" style="display:inline">
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
<col width="40%"></col>
<col width="12%"></col>
<col width="15%"></col>
<col width="6%"></col>
<col width="30%"></col>
</colgroup>
<thead>
<tr>
<th colspan="5">帖子列表</th>
</tr>
</thead>
<tbody id="tbodydom">
<tr>
<th style="text-align: center;">标题</th>
<th>发帖人</th>
<th>时间</th>
<th>是否置顶</th>
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
<span class='tiezi'></span>&nbsp;&nbsp;<a href="./index.php?r=forum/info&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
</a>
</td>
<td>
<a href="./index.php?r=forum&un=<?php echo $_smarty_tpl->tpl_vars['p']->value['username'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['p']->value['rname'];?>
</a>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['p']->value['ftime'];?>
</td>
<td id="is<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['p']->value['istop']==1){?>是<?php }else{ ?>否<?php }?></td>
<td>
<?php if ($_smarty_tpl->tpl_vars['p']->value['istop']==0){?>
[ <a href='javascript:;' onclick="javascript:marktop(<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
,1)">置顶</a> ] <?php }else{ ?>
[ <a href='javascript:;' onclick="javascript:marktop(<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
,0)">取消置顶</a> ] <?php }?>
[ <a href='javascript:;' onclick="javascript:deleteforum(<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
)">删除</a> ]
</td>
</tr>

<?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
<tr>
<td colspan="5" style="text-align:center">暂时没有数据...</td>
</tr>
<?php } ?>
</tbody>
<tfoot>
<tr>
<th colspan="5">
<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

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