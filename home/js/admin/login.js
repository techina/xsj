/////////////////////////////////////////////
function login() {
    var t = $("#username").val();
    var c = $("#password").val();

    if (t == "") {
        alert("请输入账号……");
        return false;
    } else if (c.length < 2) {
        alert("请正确输入密码……");
        return false;
    }
    $("#remember-label").html("<img src='./image/loading.gif'>");
    $.post('./index.php?r=admin/default/login',
            {
                name: t,
                pwd: c,
            },
            function(data) {
                var ts = data;
                if (ts == "fail")
                    $("#remember-label").html("登录失败");
                else
                    window.location.href = ts;
            }
    );
}

// //////////////////////////////////////////
function checkreg() {
    var n = $("#uname").val();
    var f = $("#fpwd").val();
    var s = $("#spwd").val();
    var e = $("#email").val();
    var search_str = /^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/;
    if (n == "") {
        alert("请输入用户名!");
        $('#uname').focus();
        return false;
    } else if (f == "") {
        alert("请输入密码 !");
        $('#fpwd').focus();
        return false;
    } else if (s == "") {
        alert("请输入确认密码 !");
        $('#spwd').focus();
        return false;
    } else if (f != s) {
        alert("两次密码输入不一致，请重新输入 !");
        $('#fpwd').focus();
        return false;
    } else if (!search_str.test(e)) {
        alert("请输入正确格式的电子邮件地址 !");
        $('#email').focus();
        return false;
    }
    return ture;
}
function change(obj) {
    obj.src = "./?m=Users&a=code&" + (new Date()).valueOf();
}