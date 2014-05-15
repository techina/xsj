<?php

/**
 * Description of MController
 * @copyright  copyright(2011) weibo.com all rights reserved
 * @author weibo.com php team
 * @modifier zhangjianfeng
 * @date 2014-4-3
 * @package
 */
class MController extends CController{
	public function init(){
		parent::init();
		$_SESSION['userinfo']['username']='admin';
		$_SESSION['userinfo']['rname']='李四';

		//	if(!isset($_SESSION['userinfo'])){
		//			Yii::error('无权访问','/index.php',3);
		//			exit;
		//		}
		//		if('admin'!=$_SESSION['userinfo']['userlevel']){
		//			Yii::error('无权访问','/index.php',3);
		//			exit;
		//		}
		//		if(1000<(time()-$_SESSION['userinfo']['time'])){
		//			Yii::error('登陆超时，请重新登陆……','/index.php?r=admin/default',3);
		//			exit;
		//		}
		//		$_SESSION['userinfo']['time']=time();
}
}
