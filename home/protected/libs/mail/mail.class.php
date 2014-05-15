<?php
error_reporting(0);
class mail{
static function postmail($to,$subject = "",$body = ""){
    //$to 表示收件人地址 $subject 表示邮件标题 $body表示邮件正文
    date_default_timezone_set("Asia/Shanghai");//设定时区东八区
    require_once('./protected/libs/mail/class.phpmailer.php');
    require_once('./protected/libs/mail/class.smtp.php');
    $mail             = new PHPMailer(); //new一个PHPMailer对象出来
    $body             = eregi_replace("[\]",'',$body); //对邮件内容进行必要的过滤\
    $mail->CharSet ="UTF-8";//设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP(); // 设定使用SMTP服务
    $mail->SMTPDebug  = 0;                     // 启用SMTP调试功能
                                           // 1 = errors and messages
                                           // 2 = messages only
    $mail->SMTPAuth   = true;                  // 启用 SMTP 验证功能
    $mail->SMTPSecure = "ssl";                 // 安全协议
    $mail->Host       =Config::$host;      // SMTP 服务器
    $mail->Port       = 465;                   // SMTP服务器的端口号
    $mail->Username   = Config::$user;  // SMTP服务器用户名(发件人账号)
    $mail->Password   = Config::$pwd;            // SMTP服务器密码（账号密码）
    $mail->SetFrom(Config::$mail, Config::$user);///（发件人信息）
    $mail->Subject    = $subject;
    $mail->MsgHTML($body);
    $mail->AddAddress($to, $to);//收件人地址()
    $mail->Send();
    }
}
?>