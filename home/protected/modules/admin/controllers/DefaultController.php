<?php

class DefaultController extends CController {

	public function actionIndex() {
		if('admin'!=$_SESSION['userinfo']['userlevel']){
			$smarty = Yii::app()->smarty;
			$smarty->assign('un',$_SESSION['userinfo']['rname']);
			$smarty->display('admin/login.html');
		}else{
			if(1000<(time()-$_SESSION['userinfo']['time'])){
				unset($_SESSION['userinfo']);
				Yii::error('登陆超时，请重新登陆……','/index.php?r=admin',2);
				exit;
			}
			$_SESSION['userinfo']['time'] = time();
			Yii::success('正在跳转……','/index.php?r=admin/index',2);
		}
	}

	public function actionLogin() {
		$u = Users::model();
		$n = $_POST['name'];
		$p = md5($_POST['pwd']);
		$sql = "SELECT id,username,useremail,userlevel,userpic,rname FROM `xsj_users` WHERE username='$n' and userpwd='$p' and islock=0";
		$ui = $u->findBySql($sql);
		if ($ui) {
			foreach ($ui as $key => $value)
			$_SESSION['userinfo'][$key] = $value;
			$_SESSION['userinfo']['time'] = time();
			echo '/?r=admin/index/index';
		} else {
			echo 'fail';
		}
	}

}
