<?php

class DocfileController extends MController{
	public function actionIndex(){
		$id=$_GET['id'];
		$f=Docfile::model();
		$posts=$f->findAll("noticeid=$id");
		$smarty=Yii::app()->smarty;
		$_SESSION['noticeid']=$id;
		$smarty->assign("infolist",$posts);
		$smarty->assign("sessionid",session_id());
		$smarty->display('admin/notice/docindex.html');
	}

	public function actionUpload() {
		include_once './protected/libs/Tools.php';
		if (isset($_POST["PHPSESSID"])) {
			session_id($_POST["PHPSESSID"]);
		}else if(isset($_GET["PHPSESSID"])){
			session_id($_GET["PHPSESSID"]);
		}
		session_start();
		$file_path = './upload/doc/';
		@chmod($file_path, 0777);
		$file_path=NewPath($file_path);
		$file_name=basename($_FILES['Filedata']['name']);
		$realName=$file_name;
		$file_ext=substr($file_name, strripos($file_name, '.'));
		$id=createId();
		$file_name=$id.$file_ext;
		$file_up = $file_path.$file_name;

		$file_tmp=$_FILES['Filedata']['tmp_name'];
		$f_m="";

		move_uploaded_file($file_tmp,$file_up);

		//保存文件
		$id=$_SESSION['noticeid'];
		$strp=array("docname"=>$realName,"docpath"=>$file_up,"noticeid"=>$id,"username"=>$_SESSION['userinfo']['username'],"rname"=>$_SESSION['userinfo']['rname']);
		if($_SESSION['uploadinfomationinfo']==null){
			$_SESSION['uploadinfomationinfo']=array();
			$_SESSION['uploadinfomationcount']=0;
		}
		array_push($_SESSION['uploadinfomationinfo'],$strp);
		$_SESSION['uploadinfomationcount']+=1;
	}
	public function actionPmultisave(){
		if($_SESSION['uploadinfomationinfo']!=null){
			$sql="INSERT INTO xsj_docfile(docname,username,docpath,noticeid,rname,dtine) VALUES";
			$arr=$_SESSION['uploadinfomationinfo'];
			$len=count($arr);
			for ($i=0;$i<$len;$i++){
				$n=$arr[$i]['docname'];
				$un=$arr[$i]['username'];
				$aid=$arr[$i]['noticeid'];
				$path=$arr[$i]['docpath'];
				$rn=$arr[$i]['rname'];
				$time=Format::timeToPRC();
				$sql.="('$n','$un','$path','$aid','$rn','$time'),";
			}
			$sql=rtrim($sql,',');
			$count=$_SESSION['uploadinfomationcount'];
			//$trac=Yii::app()->db->beginTransaction();
			$p=Yii::app()->db->createCommand($sql)->execute();
			if($p){
				//$trac->commit();
				echo 'ok';
			}
			else {
				//$trac->rollback();
				echo "fail";
			}
			unset($_SESSION['uploadinfomationinfo']);
			unset($_SESSION['uploadinfomationcount']);
		}
	}
	public function actionDel(){
		$id=$_GET['id'];
		$url=$_GET['url'];
		$f=Docfile::model();
		$posts=$f->deleteAll("id=$id");
		if($posts){
			if(file_exists($url))
			unlink($url);
			echo $id;
		}
		else echo 'fail';
	}

}
