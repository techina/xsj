<?php

class SiteController extends CookieController{

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex() {
		$smarty = Yii::app()->smarty;
		$smarty->display('cli/login.html');
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError() {
		if ($error = Yii::app()->errorHandler->error) {
			if (Yii::app()->request->isAjaxRequest)
			echo $error['message'];
			else{
				$smarty = Yii::app()->smarty;
				$smarty->display('cli/404.html');
			}
		}
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout() {
		unset($_SESSION['userinfo']);
		$this->redirect(Yii::app()->homeUrl);
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogin() {
		$u = Users::model();
		$n = $_POST['un'];
		$p = md5($_POST['pw']);
		$sql = "SELECT id,username,useremail,userlevel,userpic,rname FROM `xsj_users` WHERE username='$n' and userpwd='$p' and islock=0";
		$ui = $u->findBySql($sql);
		if ($ui) {
			foreach ($ui as $key => $value)
			$_SESSION['userinfo'][$key] = $value;
			$_SESSION['userinfo']['time'] = time();
			echo '/index.php?r=index';
		} else {
			echo 'fail';
		}
	}
}
