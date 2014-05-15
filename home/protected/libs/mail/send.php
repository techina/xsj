<?php
error_reporting(0);
include_once './protected/libs/mail/mail.class.php';
$na=$_SESSION['regusername'];
$em=$_SESSION['regemail'];
mail::postmail($em,'注册通知','亲爱的   '.$na.'，<br>欢迎你加入我们，您的注册邮箱是 '.$em.'，如果您遗忘了密码，您可以随时使用该邮箱找回你的密码');
unset($_SESSION['regusername']);
unset($_SESSION['regemail']);
unset($na);
unset($em);

?>