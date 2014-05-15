<?php /* Smarty version Smarty-3.1.11, created on 2014-05-14 16:36:48
         compiled from "D:\netbeans\yii\home\protected\views\tpl\admin\users\import.html" */ ?>
<?php /*%%SmartyHeaderCode:2327453732b20c780b1-30436072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1c3a281d0d1a78aad637b1574baab148730ba2d' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\admin\\users\\import.html',
      1 => 1398313115,
      2 => 'file',
    ),
    '0a79f929570610f7e5ffb9099079fa26a871c1d4' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\comm\\mbase.html',
      1 => 1399641844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2327453732b20c780b1-30436072',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53732b20d720e6_28036841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53732b20d720e6_28036841')) {function content_53732b20d720e6_28036841($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="pragma" content="no-cach" /> 
		<meta http-equiv="cache-control" content="no-cache" /> 
		<meta http-equiv="expires" content="0" />
        <title>管理后台-导入用户</title>
    
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
<col width="20%"></col>
<col width="20%"></col>
<col width="30%"></col>
</colgroup>
<thead>
<tr>
<th colspan="5">导入用户</th>
</tr>
</thead>
<tbody id="tbodydom">
<tr>
<td colspan="5" style="text-align:center">&nbsp;</td>
</tr>
<tr>
<td colspan="5" style="text-align:center"><span id='msg'></span></td>
</tr>
<tr>
<td colspan="5" style="text-align:center"><input type="button"  id="importBtn" value='导入用户'></td>
</tr>
</tbody>
<tfoot>
<tr>
<th colspan="5" style="text-align: left;font-size: 14px">
<p>1.导入文件格式为 txt 或者 csv 格式</p>
<p>2.用户信息支持导入的字段依次为 <font color='red'>用户名,密码,邮箱,用户类型(管理员为 admin，普通用户为 ordinary ),真实姓名</font></p>
<p>3.文件内容书写格式为一行代表一个用户信息，5个字段之间使用英文逗号（<font color='red'>,</font>）隔开，字段书写顺序为 第二条 述说顺序</p>
<p>4.文件内容书写格式范例：    <font color='red'>username,userpwd,useremail,userlevel,rname</font></p>
</th>
</tr>
<th colspan="5">
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
    
    
<script type="text/javascript" src="./js/ajaxupload.js"></script>
<script type="text/javascript">
window.onload = function(){
	var selectPic = document.getElementById("importBtn");
	var oRemind = document.getElementById("msg");
	var au=new AjaxUpload(selectPic,{
		action:"./index.php?r=admin/users/imports",
		name:"upload",
		autoSubmit:true,
		onSubmit:function(file,ext){
			if(ext && /^(txt|csv)$/.test(ext)){
			}else{	
				oRemind.style.color = "#ff3300";
				oRemind.innerHTML = "不支持的文件格式！";
				return false;
			}
		},
		onComplete:function(file,response){
			if(response!='fail'){
				oRemind.innerHTML = "导入成功，共导入 "+response+" 个用户";
			}else{
				oRemind.innerHTML = "<font color='red'>上传失败，请重试……</font>";
			}
		}
	});
};
</script>

</body>
</html><?php }} ?>