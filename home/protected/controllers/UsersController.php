<?php

class UsersController extends BaseController {


	public function actionWd(){
		$smarty=Yii::app()->smarty;
		$smarty->assign('un',$_SESSION['userinfo']['username']);
		$smarty->assign('email',$_SESSION['userinfo']['useremail']);
		$smarty->display('cli/users/wd.html');
	}

	public function actionI(){
		$smarty=Yii::app()->smarty;
		$un=$_SESSION['userinfo']['username'];
		$u=Users::model();
		$ui = $u->findAll("username='$un'");
		$smarty->assign('info',$ui);
		$smarty->display('cli/users/info.html');
	}
	public function actionUinfo(){
		$smarty=Yii::app()->smarty;
		$un=$_GET['un'];
		$u=Users::model();
		$ui = $u->findAll("username='$un'");
		if($ui){
			$smarty->assign('info',$ui);
			$smarty->display('cli/users/perinfo.html');
		}else echo 'fail';
	}
	public function actionWde(){
		$old=md5(trim($_POST['oldPwd']));
		$npwd=md5($_POST['newPwd']);
		$un=$_SESSION['userinfo']['username'];
		$u=Users::model();
		$us=$u->findAll("username='$un' and userpwd='$old'");
		if($us){
			$s=$u->updateAll(array('userpwd'=>$npwd),"username='$un'");
			if($s){
				Yii::success('修改成功','/index.php?r=users/wd',3);
			}
			else Yii::error('修改失败','/index.php?r=users/wd',3);
		}else Yii::error('原始密码校验失败','/index.php?r=users/wd',3);
	}

	public function actionPhoto(){
		$smarty=Yii::app()->smarty;
		$smarty->assign('un',$_SESSION['userinfo']['username']);
		$smarty->assign('email',$_SESSION['userinfo']['useremail']);
		$smarty->display('cli/users/avatar.html');
	}
	public function actionAvatar(){
		$un=$_GET['username'];
		$pic=$_GET['userpic'];
		$w=Users::model();
		$s=$w->updateAll(array("userpic"=>$pic),"username='$un'");
		if($s)
		echo 'ok';
		else echo 'fail';
	}
	
	public function actionUpinfo(){
		$un=$_SESSION['userinfo']['username'];
		$fe=$_GET['feild'];
		$va=$_GET['value'];
		$w=Users::model();
		$s=$w->updateAll(array($fe=>$va),"username='$un'");
		if($s)
		echo $fe;
		else echo 'fail';
	}
}
