<?php /* Smarty version Smarty-3.1.11, created on 2014-05-13 12:49:09
         compiled from "D:\netbeans\yii\home\protected\views\tpl\cli\users\wd.html" */ ?>
<?php /*%%SmartyHeaderCode:168835371a4450fc709-33132403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '897e53f9c79f8de64e135c44b585d53f8736f49a' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\cli\\users\\wd.html',
      1 => 1398401519,
      2 => 'file',
    ),
    'a894336046df3f29aba43a4abc3d31d9ef813bec' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\comm\\hbase.html',
      1 => 1399359534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168835371a4450fc709-33132403',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5371a4457325f4_51826127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5371a4457325f4_51826127')) {function content_5371a4457325f4_51826127($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>要成才 - 找新视界 - 修改密码</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="./css/cli/global_import.css"  type="text/css" rel="stylesheet"/>
<link href="./css/cli/xsj.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="./css/cli/style.css"/>
<!--[if IE 6]> 
<link href="./css/cli/global_import_ie6.css" type="text/css" rel="stylesheet"/>
<![endif]--> 


 
<script type='text/javascript' src='./js/jquery.js'></script>
<script type="text/javascript" src='./js/cli/info.js'></script>
 
 


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
<span class='span1'>修改密码</span>
<a href="./index.php?r=forum/post"><span class='span2'></span></a>
</div>
<div class='topjobs'>
<form id="J_pw_edit" action="./index.php?r=users/wde" method="post" onsubmit="return chpwd()">
	<div class="profile_ct password_list">
		<dl class="cc">
			<dt>原密码：</dt>
			<dd><input id="J_old_pwd"  name="oldPwd" class="input length_5" type="password"><span id="J_tip_oldPwd"><span class="reg_tips">请输入原密码</span></span></dd>
		</dl>
		<dl class="cc">
			<dt>新密码：</dt>
			<dd><input id="J_newPwd" name="newPwd" class="input length_5"  type="password"><span id="J_tip_newPwd"><span class="reg_tips">密码最小长度5个字，最大长度15个字</span></span></dd>
		</dl>
		<dl class="cc">
			<dt>确认密码：</dt>
			<dd><input id="J_rePwd" name="rePwd" class="input length_5" type="password"><span id="J_tip_rePwd"><span class="reg_tips">请再输入一遍您上面填写的密码</span></span></dd>
		</dl>
		<dl class="cc">
			<dt>&nbsp;</dt>
			<dd><button type="submit" class="btn btn_submit btn_big mr10">提交</button></dd>
		</dl>
	</div>
	</form>
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