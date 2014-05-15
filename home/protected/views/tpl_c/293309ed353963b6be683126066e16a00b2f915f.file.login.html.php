<?php /* Smarty version Smarty-3.1.11, created on 2014-05-02 10:17:20
         compiled from "D:\netbeans\yii\home\protected\views\tpl\cli\login.html" */ ?>
<?php /*%%SmartyHeaderCode:262785363003053b6e2-47288032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '293309ed353963b6be683126066e16a00b2f915f' => 
    array (
      0 => 'D:\\netbeans\\yii\\home\\protected\\views\\tpl\\cli\\login.html',
      1 => 1397925283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262785363003053b6e2-47288032',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_536300307047c3_73276995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536300307047c3_73276995')) {function content_536300307047c3_73276995($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>登录</title>
    <meta charset="UTF-8">
    <link href="./css/bootstrap.min.css?v" rel="stylesheet" />
    <link href="./css/login.css" rel="stylesheet" />
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/cli/login.js"></script>
    <!--[if lt IE 9]>
 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  </head>
  <body>
      <div id="login-container">
            <div id="login-header">
                <h3>登录</h3>
            </div> <!-- /login-header -->
            <div id="login-content" class="clearfix">
                
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="username">账号：</label>
                        <div class="controls">

                            <input type="text" class="" id="username" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">密码：</label>
                        <div class="controls">
                            <input type="password" class="" id="password" />
                        </div>
                    </div>
                </fieldset>
                <div id="remember-me" class="pull-left">
                    <label id="remember-label" style="color: red"></label>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-warning btn-large" onclick="login()">
                        登录
                    </button>
                </div>
              
            </div> <!-- /login-content -->
            <div id="login-extra">
                <p style="float: left;margin-left: 25px">忘记密码？ <a href="/?r=fp">找回密码</a></p>
            </div> 
        </div> <!-- /login-wrapper -->
  </body>
</html>
<?php }} ?>