<?php
//error_reporting(0);
include_once './protected/libs/mail/mail.class.php';
$em=$_SESSION['regemail'];
$url=$_SESSION['linkurl'];
mail::postmail($em,'找回密码','亲爱的   '.$em.'，<br>这是您找回密码的邮件，请 <a href="'.$url.'">点击这里</a> 及时修改您的密码。<br>该链接在1小时之内有效 ');
unset($_SESSION['linkurl']);
unset($_SESSION['regemail']);
?>