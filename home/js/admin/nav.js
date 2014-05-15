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

function markimportant(id, sta) {
	a = confirm('确定要执行此操作么？');
	if (a) {
		$.get('/index.php?r=admin/notice/mark&id=' + id + '&sta=' + sta,
				function(data) {
					var str = data.toString();
					if (str != "fail") {
						var ts = $('#is' + str).html();
						alert("操作成功");
						if ('是' == ts)
							$('#is' + str).html('否');
						if ('否' == ts)
							$('#is' + str).html('是');
					} else {
						alert("操作失败");
					}
				});
	}
}
function marktop(id, sta) {
	a = confirm('确定要执行此操作么？');
	if (a) {
		$.get('/index.php?r=admin/forum/mark&id=' + id + '&sta=' + sta,
				function(data) {
					var str = data.toString();
					if (str != "fail") {
						var ts = $('#is' + str).html();
						alert("操作成功");
						if ('是' == ts)
							$('#is' + str).html('否');
						if ('否' == ts)
							$('#is' + str).html('是');
					} else {
						alert("操作失败");
					}
				});
	}
}

function deletedoc(id, url) {
	a = confirm('确定要删除么？');
	if (a) {
		$.get('/index.php?r=admin/docfile/del&id=' + id + '&url=' + url,
				function(data) {
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

function deleteuser(id) {
	a = confirm('确定要删除么？');
	if (a) {
		$.get('/index.php?r=admin/users/del&id=' + id, function(data) {
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

function marklock(id, sta) {
	a = confirm('确定要执行此操作么？');
	if (a) {
		$.get('/index.php?r=admin/users/mark&id=' + id + '&sta=' + sta,
				function(data) {
					var str = data.toString();
					if (str != "fail") {
						var ts = $('#is' + str).html();
						alert("操作成功");
						if ('已锁定' == ts)
							$('#is' + str).html('正常');
						if ('正常' == ts)
							$('#is' + str).html('已锁定');
					} else {
						alert("操作失败");
					}
				});
	}
}
function markpwd(id) {
	a = confirm('确定要执行此操作么？');
	if (a) {
		$.get('/index.php?r=admin/users/markapply&id=' + id, function(data) {
			var str = data.toString();
			if (str != "fail") {
				$('#apply' + str).hide();
			} else {
				alert("操作失败");
			}
		});
	}
}

function deletecategory(id) {
	a = confirm('确定要删除么？');
	if (a) {
		$.get('/index.php?r=admin/category/del&id=' + id, function(data) {
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

function opencategory() {
	$('.add-category').toggle();
}
function addcategory() {
	var t = $('#categoryname').val();
	if ('' == t.trim()) {
		$('#tip-s').html('请输入角色名称');
		return;
	}
	$.get('./index.php?r=admin/category/add', {
		cname : t
	}, function(str) {
		if (str == 'cfail') {
			$('#tip-s').html('该角色已存在');
			return;
		} else if (str == 'fail') {
			$('#tip-s').html('添加失败');
			return;
		} else {
			window.location.href = './index.php?r=admin/category/edit&id='
					+ str;
		}
	});
}
function addpower() {
	var t = $('#powername').val();
	var ex = $('#pexec').val();
	if ('' == t.trim()|| ''==ex.trim()) {
		$('#tip-s').html('请输入权限名称');
		return;
	}
	$.get('./index.php?r=admin/power/add', {
		pname : t,
		pexec:ex
	}, function(str) {
		if (str == 'cfail') {
			$('#tip-s').html('该权限已存在');
			return;
		} else if (str == 'fail') {
			$('#tip-s').html('添加失败');
			return;
		} else {
			$('#tip-s').html('添加成功');
		}
	});
}
function deletepower(id) {
	a = confirm('确定要删除么？');
	if (a) {
		$.get('/index.php?r=admin/power/del&id=' + id, function(data) {
			var str = data.toString();
			if (str == "fail")
				alert("删除失败");
			else {
				alert("删除成功");
				$('.trpower' + str).remove();
			}
		});
	}
}
function openedittr(id) {
	$('#trpower' + id).toggle();
}
function editpower(id) {
	var t = $('#pname' + id).val();
	if ('' == t.trim()) {
		return;
	}
	$.get('./index.php?r=admin/power/update', {
		id : id,
		pname : t
	}, function(str) {
		if (str == 'fail') {
			alert('更新失败');
			return;
		} else {
			alert('更新成功');
			$('#curpower' + id).html(t);
			$('#trpower' + id).hide();
		}
	});
}
