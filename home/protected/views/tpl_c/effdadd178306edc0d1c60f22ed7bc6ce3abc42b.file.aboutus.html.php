<?php /* Smarty version Smarty-3.1.11, created on 2014-05-08 14:32:12
         compiled from "/var/www/yii/protected/views/tpl/cli/public/aboutus.html" */ ?>
<?php /*%%SmartyHeaderCode:1162903374536b24ece208e4-62779899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'effdadd178306edc0d1c60f22ed7bc6ce3abc42b' => 
    array (
      0 => '/var/www/yii/protected/views/tpl/cli/public/aboutus.html',
      1 => 1398134999,
      2 => 'file',
    ),
    'fbb9f1a528d1c21972358e166a2231e2311797e7' => 
    array (
      0 => '/var/www/yii/protected/views/tpl/comm/hbase.html',
      1 => 1399359534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1162903374536b24ece208e4-62779899',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_536b24ece93627_59904438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536b24ece93627_59904438')) {function content_536b24ece93627_59904438($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>要成才 - 找新视界 - 关于我们</title>
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
<span class='span1'>关于我们</span>
</div>
<div class='topjobs'>
<h2 style='text-align: center;border: none'>新视界培训中心</h2>
<P align=left><FONT style="FONT-SIZE: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 中心简介：主要培养室内设计师、平面设计师、影视动画制作精英的培训机构，与各大装饰公司、广告公司、媒体公司具有广泛而密切的联系，所有讲师分别来自各大设计公司，以及高等院校的在职教师，具有多年的教学经验，培育出一批又一批设计的人才。</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 为体现实战教学和强化教学，理论联系实际确保教学书平。培训中心将安排学生直接参与工程实践，选择重点工程现场或例案观摩实习，体现学以致用的教学目的。</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 培训中心采用自创的教学模式，组要体现实战派的教学特点，注重超前的设计思维，注重设计师全面素质的培养，以适应毕业后进入社会竞争的格局，真正成为名副其实的高级设计师。 </FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">课程设置：</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">1、平面设计：</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">设计软件：Photoshop、Illustrator、Coredraw</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">设计实战（前期）：通过完整的商业案例讲解，是学员最终实现对商业项目的全程把握</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">设计实战（后期）：真实商业设计项目比稿，设计公司实训体验</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">2、室内设计：</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">设计软件：Auto CAD、3DsMax、VRAY、Photoshop后期</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">实训内容：全面系统学习Auto CAD、3DsMax、VRAY、Photoshop后期合成等软件的综合运用，来制作专业室内效果图，案例涉及各种家装、工装、日景的表现，学习使用3DsMax建模、灯光阵列技术，VRAY渲染技术。从CAD识图制图、3DMax建模、VARY渲染到Photoshop后期合成修饰。学习掌握一整套专业的效果图制作流程。</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">3、建筑园林：</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">表现软件：AutoCAD、天正CAD、3DsMax、VRAY、Photoshop后期</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">项目实战：通过真实项目讲解，了解不同类型及场景的制作方法及规律。包括：单体建筑透视、园林平彩图、日景、夜景、雪景、鸟瞰图等制作。</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">4工业设计：</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">表现软件：Rhinoceros、3DsMax、VRAY、Photoshop后期、 </FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">课程设置：1.建模基础篇；2.实践建模篇；3.高级建模篇；4.VRAY渲染器基础；5.VRAY渲染器设置精讲；6.高级强化篇；7.产品六视图的表现：分解图、爆炸图、结构图的表现；8.PS后期处理及美工表现。</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">5、影视动画：</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">设计软件：Maya/3DsMax、Afterefrect（影视合成特效）、Premiere（视频剪辑）、Photoshop（后期制作）、Illustrator（后期制作）</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">影视角色动画：本课程主要是在Maya软件平台上进行的角色动画的学习和训练。将以Maya为软件平台，对角色动画进行循序渐进的专业训练。</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">6、手绘表现：</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">手绘方向：1、工业产品手绘表现 2、环艺手绘快速表现</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">实训内容：1、室内家具、室内小品、人物及室内水景（配景）等室内元素的表现手法</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">2、掌握钢笔、彩笔、马克笔的表现技法</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">3:、完整室内透视图</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">4、室内设计平面图、立面图、剖面图的手绘技巧</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">5、对于工业产品结构的认识了解</FONT></P>
<P align=left><FONT style="FONT-SIZE: 16px">6、手绘实战：手绘专业技能培训以及相关的大量的实例演练</FONT></P>
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