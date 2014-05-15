var xh;
function c_xh() {
    if (window.ActiveXObject) {
        xh = new ActiveXObject("Microsoft.XMLHTTP");
    } else if (window.XMLHttpRequest) {
        xh = new XMLHttpRequest();
    }
}

var picarr = [
    "<img src='./image/error.gif' class='bo'>",
    "<img src='./image/right.gif' class='bo'>"
];
var msg = [
    "4-15位字母、数字或下划线组合，首字符必须为字母。",
    "5-20位字符，可由数字，英文组成",
    "确保密码输入正确。",
    "为了方便您修改您的密码或其他业务操作。",
    "用户名可用",
    "邮箱可以使用",
    "字符非法或格式不正确",
    "两次密码输入不一致，请重新输入",
    "用户名已经存在……",
    "邮箱已经存在……",
    "您输入的邮箱格式不正确...",
    "请先阅读并同意条款内容!",
    "请输入用户名!",
    "请输入密码 !",
    "请输入确认密码 !",
    "验证码长度错误，请重新输入 !"
];
var fontarr = ["<font color='red'>", "<font color='blue'>", "</font>"];
var ws = "&nbsp;&nbsp;&nbsp;";
function lostfocus(k) {
    if (k == 1) {
        var pwd = $("#pwd").val();
        if (!(/\w{5,20}/.test(pwd))) {
            $("#pwdmes").html(ws + picarr[0] + fontarr[0] + msg[1] + fontarr[2]);
            return false;
        } else {
            $("#pwdmes").html(ws + picarr[1]);
            return ture;
        }
    }
    if (k == 2) {
        var apwd = $("#againpwd").val();
        var pwd = $("#pwd").val();
        if (!(/\w{5,20}/.test(apwd))) {
            $("#againmes").html(ws + picarr[0] + fontarr[0] + msg[1] + fontarr[2]);
            return false;
        } else if (apwd != pwd) {
            $("#againmes").html(ws + picarr[0] + fontarr[0] + msg[7] + fontarr[2]);
            return false;
        } else {
            $("#againmes").html(ws + picarr[1]);
            return ture;
        }
    }

}
function getfous(k) {
    if (k == 1)
        $("#namemes").html(ws + msg[0]);
    if (k == 2)
        $("#pwdmes").html(ws + msg[1]);
    if (k == 3)
        $("#againmes").html(ws + msg[2]);
    if (k == 4)
        $("#emailmes").html(ws + msg[3]);

}
function namelost() {

    var tt = $("#name").val();
    if (!(/^[a-z]{1}\w{3,14}/.test(tt))) {
        alert(msg[6]);
        $("#namemes").html(ws + picarr[0] + fontarr[0] + msg[0] + fontarr[2]);
        return false;
    } else {
        c_xh();
        var url = "/index.php?r=admin/users/checkname&uname=" + tt;
        xh.open("get", url, true);
        xh.onreadystatechange = c_wri;
        xh.send(null);
    }
}
function c_wri() {
    if (xh.readyState == 4) {
        if (xh.status == 200) {
            var ts = xh.responseText;
            if (ts == "yes1") {
                $("#namemes").html(ws + picarr[0] + fontarr[0] + msg[8] + fontarr[2]);
                $("#name").val("");
            }
            if (ts == "no1")
                $("#namemes").html(ws + picarr[1] + fontarr[1] + msg[4] + fontarr[2]);
            if (ts == "eyes1") {
                $("#emailmes").html(ws + picarr[0] + fontarr[0] + msg[9] + fontarr[2]);
                $("#email").val("");
            }
            if (ts == "eno1")
                $("#emailmes").html(ws + picarr[1] + fontarr[1] + msg[5] + fontarr[2]);
        }
    }
}
function emaillost() {
    var e = $("#email").val();
    if (!(/\w{3,20}@\w+\.(com|org|cn|net|gov|com.cn)/.test(e))) {
        $("#emailmes").html(ws + picarr[0] + fontarr[0] + msg[10] + fontarr[2]);
        return false;
    } else {
        c_xh();
        var url = "/index.php?r=admin/users/checkmail&uemail=" + e;
        xh.open("get", url, true);
        xh.onreadystatechange = c_wri;
        xh.send(null);

    }
}

function dosubmit() {


    var o = $("#tongyi");
    var n = $("#name").val();
    var f = $("#pwd").val();
    var s = $("#againpwd").val();
    var e = $("#email").val();
    var y = $("#yan").val();
    if (o.attr("checked") == false) {
        alert(msg[11]);
        return false;
    } else
    if (n == "") {
        alert(msg[12]);
        $('#uname').focus();
        return false;
    } else if (f == "" || f.length < 5 || f.length > 20) {
        alert(msg[13]);
        $('#upwd').focus();
        return false;
    } else if (s == "" || f.length < 5 || f.length > 20) {
        alert(msg[14]);
        $('#againpwd').focus();
        return false;
    } else if (f != s) {
        alert(msg[7]);
        $('#fpwd').focus();
        return false;
    } else if (!(/\w{3,20}@\w+\.(com|org|cn|net|gov|com.cn)/.test(e))) {
        alert(msg[10]);
        $('#email').focus();
        return false;
    } else if (y.length < 4) {
        alert(msg[15]);
        $('#yan').focus();
        return false;
    }
    return ture;

}
//遮罩显示
function showmes() {
    var o = $("#overdiv");
    var w = $(window);
    //注册页面协议位置初始化
    o.css("left", (w.width() - o.width()) / 2 + w.scrollLeft() + "px");
    o.css("top", (w.height() - o.height()) / 2 + w.scrollTop() + "px");
    o.show();

}
function unpermit() {
    $("#overdiv").hide();
}

function change(obj) {
    obj.src = "/?m=Users&a=code&" + Math.random();
}