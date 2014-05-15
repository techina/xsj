<?php

class FpController extends CController {

	public function actionIndex(){
		$smarty=Yii::app()->smarty;
		$smarty->display('cli/fp/fp.html');
	}
	public function actionCheck(){
		$id=$_GET['email'];
		$f=Users::model();
		$list=$f->findAll("useremail='$id'");
		if($list){
			$f->updateAll(array('isapply'=>1), "useremail='$id'");
			Yii::success("我们已经收到你的申请，请耐心等待","/index.php",3);
		}
		else Yii::error("该邮箱未能通过验证，请核对后再试……","./index.php?r=fp",3);
	}
}
