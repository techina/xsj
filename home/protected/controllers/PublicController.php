<?php
class PublicController extends BaseController{
	public function actionUpload(){
		include_once './protected/libs/Image.class.php';
		$file_path = './upload/header/';
		$file_name=basename($_FILES['upload']['name']);
		$file_ext=substr($file_name, strripos($file_name, '.'));
		$id=$_SESSION['userinfo']['username'];
		$file_name=$id.$file_ext;
		$file_up = $file_path.$file_name;
		$file_tmp=$_FILES['upload']['tmp_name'];
		@chmod($file_path, 0644);
		if(move_uploaded_file($file_tmp,$file_up)){
			$img=new Image($file_path);
			$img->thumb($file_name,100,100,'');
			echo $file_up.'?'.time();
			exit;
		}else
		echo 'fail';
		exit;
	}
	
	public function actionAboutus(){
		$smarty=Yii::app()->smarty;
		$smarty->display('cli/public/aboutus.html');
	}
}

?>