$(document).ready(function() {
	var $_powerall = $('#powerall li input');
	var $_power = $('#catepower').val();
	$_power = eval($_power);
	var lenp = $_power.length;
	var len = $_powerall.length;
	var parr = [];
	for (i = 0; i < len; i++)
		parr.push($_powerall.eq(i).val());
	for (k = 0; k < lenp; k++) {
		for (j = 0; j < len; j++) {
			if (parr[j] == $_power[k].poid) {
				$_powerall.eq(j).attr('checked', 'checked');
				break;
			}
		}
	}

	// 事件绑定
	for ( var h = 0; h < len; h++) {
		var fs = $_powerall.eq(h);
		fs.bind('change', function() {
			var v = fs.attr('checked');
			if (!v) 
				alert('取消勾选将收回此权限...');
		});
	}
});
