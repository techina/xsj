<?php /* Smarty version Smarty-3.1.11, created on 2014-05-12 21:00:01
         compiled from "D:\netbeans\yii\home\protected\views\tpl\admin\notice\add.html" */ ?>
<?php /*%%SmartyHeaderCode:233525370c5d1945ef8-91565431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a529f2864cde3b7a8421f664b2d03477a4fc5b08' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\admin\\notice\\add.html',
      1 => 1398006163,
      2 => 'file',
    ),
    '0a79f929570610f7e5ffb9099079fa26a871c1d4' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\comm\\mbase.html',
      1 => 1399641844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233525370c5d1945ef8-91565431',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5370c5d1ab3906_54141666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5370c5d1ab3906_54141666')) {function content_5370c5d1ab3906_54141666($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="pragma" content="no-cach" /> 
		<meta http-equiv="cache-control" content="no-cache" /> 
		<meta http-equiv="expires" content="0" />
        <title>管理后台-发布公告</title>
    
        <link rel="stylesheet" href="./css/admin/index.css" type="text/css" />
        <link type="text/css" rel="stylesheet" href="./css/admin/comm.css">
    
    
    
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
                <li id="left_tab1" class="Selected" onclick="javascript:border_left('TabPage2', 'left_tab1');">公告</li>
                <li id="left_tab2"  onclick="javascript:border_left('TabPage2', 'left_tab2');">帖子</li>
                <li id="left_tab3"  onclick="javascript:border_left('TabPage2', 'left_tab3');">用户</li>
                <li id="left_tab4"  onclick="javascript:border_left('TabPage2', 'left_tab4');">个人</li>
                <li id="left_tab5"  onclick="javascript:border_left('TabPage2', 'left_tab5');">权限</li>

            </ul>
            <div id="left_menu_cnt">
                <ul id="dleft_tab1" style="display:inline">
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
                

<form action="./index.php?r=admin/notice/addn" method="post" onsubmit="return checkpubtie();">
                                <input type="hidden" name="un" value="<?php echo $_smarty_tpl->tpl_vars['un']->value;?>
"/>
                                <input type="hidden" name="r" value="admin/notice/addn"/>
                                <table class="re" border="0" style="margin:0px auto">
                                <tr style="height: 50px;line-height: 50px"><td ></td></tr>
                                <tr><td >
                                                <label class='tips'>公告标题：<input type="text" name="title" id="tiezititle"/></label>
                                        </td></tr>
                                    <tr><td style="text-align:left">
                                            <textarea style="width:1000px;height:400px;visibility:visible" name="pubmess" id="pubmess"></textarea></td></tr>
                                    <tr><td style="text-align: center;">
                                                <input type="image" src="./image/tijiao.png"/>
                                        </td></tr>
                                </table>
                            </form>

            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
    
    
<script charset="utf-8" src="./js/admin/nav.js" type="text/javascript"></script>
<script charset="utf-8" src="./ke/kindeditor1.js" type="text/javascript"></script>
        <script charset="utf-8" src="./ke/lang/zh_CN.js"  type="text/javascript"></script>
        <script>
            KindEditor.ready(function(K) {
                var editor = K.create('textarea[name="pubmess"]', {
                	uploadJson: './ke/php/upload_json.php',
                    afterBlur: function() {
                        this.sync();
                    }
                });
            });
        </script>

</body>
</html><?php }} ?>