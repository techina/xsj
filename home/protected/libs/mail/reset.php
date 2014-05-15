<?php
//error_reporting(0);
include_once './protected/libs/mail/mail.class.php';
$em=$_SESSION['regemail'];
mail::postmail($em,'密码修改','亲爱的   '.$em.'，<br>您的密码已成功修改，请妥善保管.<br>如果不是本人操作，请及时联系管理员。 ');
unset($_SESSION['regemail']);
unset($em);

?>