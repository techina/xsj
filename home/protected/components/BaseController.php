<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class BaseController extends CController
{
	function init() {
		parent::init();
		/*if(!isset($_SESSION['userinfo'])){
			Yii::error('无权访问','/index.php',3);
			exit;
			}
			if(1000<(time()-$_SESSION['userinfo']['time'])){
			Yii::error('登陆超时，请重新登陆……','/index.php',3);
			exit;
			}
			$_SESSION['userinfo']['time']=time();*/
	}
}