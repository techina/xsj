function urepwd() {
	var email = $("#email").val();
	var search_str = /^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/;

	if (!search_str.test(email)) {
		alert("请输入正确格式的电子邮件地址 !");
		$('#email').focus();
		return false;
	}
	return ture;
}
