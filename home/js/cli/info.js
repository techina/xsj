function checkpubtie() {
	$cn = $('#pubmess').val();
	$t = $('#tiezititle').val();
	if ($cn.length < 4 || $t.length < 1) {
		alert('您输入的内容太少');
		return false;
	}
	return true;
}

function checkpub() {
	$cn = $('#pubmess').val();
	if ($cn.length < 4) {
		alert('您输入的内容太少');
		return false;
	}
	return true;
}

function addcol(id) {
	$.get('/index.php?r=follow/add&id=' + id, function(data) {
		var str = data.toString();
		if (str == "fail")
			alert("收藏失败");
		if (str == "ok")
			alert("收藏成功");
		if (str == "seco")
			alert("您已经收藏过该帖子");
	});
}

function deletecomment(id) {
	var a = confirm('确定要删除么？');
	if (a) {
		$.get('/index.php?r=comment/del&id=' + id, function(data) {
			var str = data.toString();
			if (str == "fail")
				alert("删除失败");
			else {
				alert("删除成功");
				$('#' + str).remove();
			}
		});
	}
}

function deletenotice(id) {
	a = confirm('确定要删除么？');
	if (a) {
		$.get('/index.php?r=notice/del&id=' + id, function(data) {
			var str = data.toString();
			if (str == "fail")
				alert("删除失败");
			else {
				alert("删除成功");
				$('#' + str).remove();
			}
		});
	}
}

function deleteforum(id) {
	a = confirm('确定要删除么？');
	if (a) {
		$.get('/index.php?r=forum/delr&id=' + id, function(data) {
			var str = data.toString();
			if (str == "fail")
				alert("删除失败");
			else {
				alert("删除成功");
				$('#' + str).remove();
			}
		});
	}
}


function deletefollow(id) {
	a = confirm('确定要删除么？');
	if (a) {
		$.get('/index.php?r=follow/del&id=' + id, function(data) {
			var str = data.toString();
			if (str == "fail")
				alert("删除失败");
			else {
				alert("删除成功");
				$('#' + str).remove();
			}
		});
	}
}


// 修改密码
function chpwd() {
	var o = $("#J_old_pwd").val();
	var n = $("#J_newPwd").val();
	var cn = $("#J_rePwd").val();
	if (o == "") {
		alert("请输入原始密码");
		$("#J_old_pwd").focus();
		return false;
	} else if (n == "") {
		alert("请输入新密码");
		$("#J_newPwd").focus();
		return false;
	} else if (cn == "") {
		alert("请输入确认新密码");
		$("#J_rePwd").focus();
		return false;
	} else if (n.length < 5) {
		alert("新密码长度不能低于5位！");
		$("#J_newPwd").focus();
		return false;
	} else if (n == cn) {
		return true;
	} else {
		alert("确认新密码与新密码输入不一致，请重新输入！");
		$("#J_rePwd").focus();
		return false;
	}
	return true;
}
function chpwd1() {

	var n = $("#newpwd").val();
	var cn = $("#cnnewpwd").val();
if (n == "") {
		alert("请输入新密码");
		$("#newpwd").focus();
		return false;
	} else if (cn == "") {
		alert("请输入确认新密码");
		$("#cnnewpwd").focus();
		return false;
	} else if (n.length < 5) {
		alert("新密码长度不能低于5位！");
		$("#newpwd").focus();
		return false;
	} else if (n == cn) {
		return true;
	} else {
		alert("确认新密码与新密码输入不一致，请重新输入！");
		$("#cnnewpwd").focus();
		return false;
	}
	return true;
}

function getUserInfo(un,e){
	var uf=$('#uf');
	uf.css({left:(e.pageX+270)+'px',top:e.pageY+'px'});
	if(window.localStorage){
		if(localStorage[un]){
			uf.html(localStorage[un]).show();
		}else{
				uf.load('./index.php?r=users/uinfo&un='+un,function(str){
					if(str!='fail'){
					localStorage[un]=str;
					uf.show();
					}else uf.hide();
				});
			}
		}else{
			uf.load('./index.php?r=users/uinfo&un='+un,function(str){
				if(str!='fail'){
				localStorage[un]=str;
				uf.show();
				}else uf.hide();
			});
		}
}

function hiddenUserInfo(){
	$('#uf').hide();
}

function updateInfo(feild){
	var value=$("#new"+feild+"info").val();
	value=value.trim();
	if(value.length<1){
		alert('请如实填写信息');
		return;
	}
	$.get('./index.php?r=users/upinfo',{feild:feild,value:value},function(str){
		if(str!='fail'){
			$("#"+feild+"info").html(value);
			$("#new"+feild+"infotr").hide();
		}
	});
	
}