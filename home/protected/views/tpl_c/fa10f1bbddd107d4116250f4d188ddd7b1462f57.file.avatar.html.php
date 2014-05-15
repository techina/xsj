<?php /* Smarty version Smarty-3.1.11, created on 2014-05-06 18:28:49
         compiled from "D:\netbeans\yii\home\protected\views\tpl\cli\users\avatar.html" */ ?>
<?php /*%%SmartyHeaderCode:164845368b961869db5-38428406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa10f1bbddd107d4116250f4d188ddd7b1462f57' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\cli\\users\\avatar.html',
      1 => 1397968848,
      2 => 'file',
    ),
    'a894336046df3f29aba43a4abc3d31d9ef813bec' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\comm\\hbase.html',
      1 => 1399359534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164845368b961869db5-38428406',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5368b961a522a0_83980903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5368b961a522a0_83980903')) {function content_5368b961a522a0_83980903($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>要成才 - 找新视界 - 修改头像</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="./css/cli/global_import.css"  type="text/css" rel="stylesheet"/>
<link href="./css/cli/xsj.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="./css/cli/style.css"/>
<!--[if IE 6]> 
<link href="./css/cli/global_import_ie6.css" type="text/css" rel="stylesheet"/>
<![endif]--> 


<style type="text/css">
#selectPic {
	margin: auto;
}

td:nth-child(1){
padding:10px;
text-align:center;
}
#savePic {
	width: 100px;
	height: 25px;
	line-height: 25px;
	display: block;
	background-color: #f99;
	color: #fff;
	text-decoration: none;
	font-size: 16px;
	margin: auto;
}

.p {
	padding-left: 150px;
	margin-top:30px;
}

#errorRemind {
	float: right;
	margin-right: 150px;
	margin-right: 150px
}
</style>

 
<script type='text/javascript' src='./js/jquery.js'></script>
<script type="text/javascript" src='./js/cli/info.js'></script>
 
 
<script type="text/javascript" src="./js/ajaxupload.js"></script>
<script type="text/javascript"><!--
window.onload = function(){
	var selectPic = document.getElementById("selectPic");
	var savePic = document.getElementById("savePic");
	var oRemind = document.getElementById("errorRemind");
	//存放图片信息的对象
	var picInfo={};
	picInfo['username']="<?php echo $_smarty_tpl->tpl_vars['un']->value;?>
";
	var au=new AjaxUpload(selectPic,{
		action:"./index.php?r=public/upload",
		name:"upload",
		autoSubmit:true,
		onSubmit:function(file,ext){
			if(ext && /^(jpg|jpeg|png|gif)$/.test(ext)){
			}else{	
				oRemind.style.color = "#ff3300";
				oRemind.innerHTML = "不支持非图片格式！";
				return false;
			}
		},
		onComplete:function(file,response){
			if(response!='fail'){
				oRemind.innerHTML = "";
				picInfo['userpic']=response;
				jQuery("#selectPic").attr('src',response);
			}else{
				oRemind.innerHTML = "<font color='red'>上传失败，请重试……</font>";
			}
		}
	});

	savePic.onclick=function(){
				//
				jQuery.get('./index.php?r=users/avatar',picInfo,function(data){
					if(data=='ok')
						oRemind.innerHTML='保存成功';
				});
	}
};
</script>



</head>
<body >
<div class="container">
<div class='uf' id='uf'></div>
<div class="header_wrap_bg"></div>
<div class="header_wrap">
  <div class="header center">
  <div class="logo" style="margin-right:20px"><a href="/index.php?r=index"><img src="./image/cli/xinshi.png" width="127" height="34" alt="" /></a></div>
    <div class="navi">
      <ul class="clearfix">
        <li id="navi_index"><a href="./index.php?r=index">首页</a></li>
        <li id="navi_index"><a href="./index.php?r=forum">论坛</a></li>
        <li id="navi_neitui_save"><a href="./index.php?r=notice">公告</a></li>
        <li id="navi_resume" style="position:relative"><a href="./index.php?r=forum&un=<?php echo $_SESSION['userinfo']['username'];?>
">我的帖子<span class="hot"></span></a></li>
<?php if ($_SESSION['userinfo']['userlevel']=='admin'){?>
        <li id="navi_company" style="position:relative"><a href="./index.php?r=admin">管理后台</a></li>
        <?php }?>
      </ul>
    </div>
    <div class="menu">  
<!-- 登陆后 -->
<div class="menu_login slideinfo">
    <div class="uinfo"><a class="ulink" href="./index.php?r=users/i">
    <img alt="<?php echo $_SESSION['userinfo']['rname'];?>
" title="<?php echo $_SESSION['userinfo']['rname'];?>
" class="icon_logo" src="<?php echo $_SESSION['userinfo']['userpic'];?>
" height="32" width="32"/><span><?php echo $_SESSION['userinfo']['rname'];?>
</span><img alt="arrow" src="./image/cli/down-arrow.png"/></a> </div>
    <ul class="userlist userlistpanel" style="display:none">
    <li class="next"><a href="./index.php?r=users/i">我的信息</a></li> 
        <li class="next"><a href="./index.php?r=forum&un=<?php echo $_SESSION['userinfo']['username'];?>
">我的帖子<span class="hot"></span></a></li>
        <li class="next"><a href="./index.php?r=comment/i">我的评论</a></li>
        <li class="next"><a href="./index.php?r=follow/i">我的收藏</a></li>
        <li class="next"><a href="./index.php?r=users/wd">修改密码</a></li>
        <li class="next"><a href="./index.php?r=users/photo">修改头像<span class="hot word3"></span></a></li>
        <li class="next"><a href="./index.php?r=site/logout">退出</a></li>
    </ul>
    </div>  
    <!-- 登陆后结束 -->
    </div>
  </div>
</div>
<div class="searchlan">
<div class="searchboxdiv">
<form action="./index.php">
<input type='hidden' name='r' value="search/forum"/>
<div class="searchbox">
<input class="search_input inp" id="keyword" name="keyword" placeholder="输入帖子标题" value="" type="text"/>
<input class="search_submit" type="submit" value=""/>
</div>
</form>
</div>
</div>



<!-- Box -->
		<div class="box clearfix" id="companyIndex">
			<!-- Maincontent -->
			<div class="maincontent">
				<div class="plate">
					<div class="hot_tuiers" style="padding-top:5px;">
       				  <div class="hot_tuiers_list clearfix">
                        
<div class="jobnavi">
<span class='span1'>修改头像</span>
</div>
<div class='topjobs'>
<p class='p'>点击图片选择新头像<span id="errorRemind"></span></p>
<table align='center' border="0"
	style="margin-top: 30px; margin-bottom: 100px">
	<tr>
		<td><img src="./image/cli/default.jpg" width="100px"
			height="100px" id="selectPic"></img></td>
	</tr>
	<tr>
		<td><a href='javascript:;' id="savePic">确定保存</a></td>
	</tr>
</table>
</div>


							
       				  </div>
        			</div>
        			<div class="blank" style="border-top:1px solid #efefef;width:725px;margin-left:-25px;position:relative"></div>
					<!-- Page -->
					
					
					<!-- ./Page -->
				</div>
			</div>
			<!-- ./Maincontent -->
			<!-- Sider -->
			<div class="sider">
			<!-- 登陆前 -->
				<div id="userinfo" class="plate userinfo"> 
      <div class="content">
						<div class="unlogin">
							<h2>欢迎来到 <span class="c1f6"><a href="./index.php?r=public/aboutus">新视界</a></span>。</h2>
							<p>一个接地气的交流平台</p>
						</div>
						<?php if ($_SESSION['userinfo']['userlevel']=='admin'){?>
						<div class="loginbtn_wrap clearfix">
							<div class="qqlogin loginbtn">
								<a href="./index.php?r=admin/users/add" class='adduser'>添加用户</a>
							</div>
						</div>
						<?php }?>
		</div>
    </div>
    <!-- 登陆前结束 -->
    <!-- 登陆后 -->
    <div id="userinfo" class="plate userinfo">
    <div class="content list clearfix">
      <div class="info clearfix">
        <div class="img">
        <a href="./index.php?r=users/photo"><img src="<?php echo $_SESSION['userinfo']['userpic'];?>
" class="icon_large_logo" alt="" style="border-radius:40px;"/></a>
        
        </div>
        <div class="det">
        	<h3><a href="./index.php?r=users/i"><?php echo $_SESSION['userinfo']['rname'];?>
</a></h3>
        	<p class="note"></p>
        	<div class="handler">
        	<a href="./index.php?r=forum/post" style="font-size:13px" class="f_orange">发帖</a>&nbsp;&nbsp;|&nbsp;
        	<a href="./index.php?r=users/wd">改密</a>&nbsp;&nbsp;|&nbsp;
        	<a href="./index.php?r=site/logout" style="font-size:13px" class="f_orange">退出</a>
        	</div>
        </div>
      </div>
	 </div></div><!-- 登陆后结束 -->
	 <div id="userinfo" class="plate userinfo">
    <div class="content list clearfix">
      <div class="info clearfix">
       <div class="wb_cont">
              <div class="wb_cont_img"><a href="http://weibo.com/605366788" target="_blank"><img src='/image/xsj_weibo.jpg'/></a></div>
              <div class="wb_cont_tips"><a href="http://weibo.com/605366788" target="_blank">公司微博</a></div>
       </div>
            <div class="wb_cont">
              <div class="wb_cont_img"><a href="http://weibo.com/u/5054480074" target="_blank"><img src='/image/boss.jpg'/></a></div>
              <div class="wb_cont_tips"><a href="http://weibo.com/u/5054480074" target="_blank">新视界三宝</a></div>
       </div>
            <div class="wb_cont">
              <div class="wb_cont_img"><a href="http://weibo.com/u/5063914803" target="_blank"><img src='/image/wenba.jpg'/></a></div>
              <div class="wb_cont_tips"><a href="http://weibo.com/u/5063914803" target="_blank">公司问吧</a></div>
       </div>
      </div>
	 </div></div>
               
<script type="text/javascript">
	$(".slideinfo").hover(function() {
		$(this).find(".userlistpanel").fadeIn("fast");
	}, function() {
		$(this).find(".userlistpanel").hide();
	});
</script>
</div>
			<!-- ./Sider -->
		</div>
		<!-- ./Box -->
<!-- Footer -->
<div class="footer">
    <div class="footer_col1">
      <p>
      <a href="http://www.99xsj.com" target="_blank">新视界培训中心</a><br/>
      <script type="text/javascript">
      copyright=new Date();
      update=copyright.getFullYear();
      document.write("&copy;"+ update);
      </script> 
        99XSJ.COM All Rights Reserved
      </p>
  </div>
</div>
<!-- ./Footer -->
<a  class="gotop"  title="返回顶部"  onclick="window.scrollTo(0,0);" ></a>
<div class='weixin_code'>
<div class="weixin_code_img"><img src="./image/xsj_wx.jpg"/></div>
<div class="weixin_code_tips">微信扫一扫</div>
</div>
</div> 

</body></html><?php }} ?>