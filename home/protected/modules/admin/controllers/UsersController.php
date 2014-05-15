<?php

class UsersController extends MController{
	public function actionIndex(){
		$sql = "select * from xsj_users where userlevel='ordinary' order by islock DESC ";
		$f=Users::model();
		$count=$f->count("userlevel='ordinary'");
		$page=new Page($count);
		$posts=$f->findAllBySql($sql.$page->limit);
		$pages=$page->fpage();
		$smarty=Yii::app()->smarty;
		$smarty->assign("info",$posts);
		$smarty->assign("pages",$pages);
		$smarty->display('admin/users/index.html');
	}

	Public function actionMark(){
		$web= Users::model();
		$id=$_GET['id'];
		$sta=$_GET['sta'];
		$s=$web->updateAll(array('islock'=>$sta),"id=$id");
		if($s)
		echo $id;
		else echo 'fail';
	}
	Public function actionMarkapply(){
		$web= Users::model();
		$id=$_GET['id'];
		$s=$web->updateAll(array('isapply'=>0,'userpwd'=>md5('123456')),"id=$id");
		if($s)
		echo $id;
		else echo 'fail';
	}
	public function actionDel(){
		$id=$_GET['id'];
		$f=Users::model();
		$posts=$f->deleteAll("id=$id");
		if($posts){
			echo $id;
		}
		else echo 'fail';
	}

	Public function actionAdd(){
		if('admin'==$_SESSION['userinfo']['userlevel']){
			$smarty=Yii::app()->smarty;
			$smarty->display('admin/users/add.html');
		}else{
			$_SESSION['userinfo']['time'] = time();
			Yii::error('无权访问','./index.php',3);
		}
	}

	function actionCheckname() {
		$u = Users::model();
		$n=$_GET['uname'];
		if ($u->findAll("username='$n'")) {
			echo 'yes1';
		} else {
			echo 'no1';
		}
	}

	function actionCheckmail() {
		$u = Users::model();
		$n=$_GET['uemail'];
		if ($u->findAll("useremail='$n'")) {
			echo 'eyes1';
		} else {
			echo 'eno1';
		}
	}

	public function actionReg() {
		$u =new Users();
		$u->username = $_POST['uname'];
		$u->userpwd = md5($_POST['upwd']);
		$u->useremail = $_POST['uemail'];
		$u->userlevel = $_POST['utype'];
		$u->rname = $_POST['rname'];
		if ($u->save()) {
			Yii::success('添加成功','/index.php?r=admin/users/add',3);
		} else {
			Yii::error('添加失败','/index.php?r=admin/users/add',3);
		}
	}

	public function actionImport(){
		$smarty=Yii::app()->smarty;
		$smarty->display('admin/users/import.html');
	}
	public function actionImports(){
		$file_path = './upload/data/';
		$file_name=basename($_FILES['upload']['name']);
		$file_ext=substr($file_name, strripos($file_name, '.')+1);

		$file_name='userimport_'.time().'_'.rand(0, 9999).'.'.$file_ext;
		$file_up = $file_path.$file_name;
		$file_tmp=$_FILES['upload']['tmp_name'];
		if(move_uploaded_file($file_tmp,$file_up)){
			echo $this->actionBuildsql($file_up,$file_ext);
		}else
		echo 'fail';
	}

	private function actionBuildsql($path,$ext){
		if(!file_exists($path))
		return 'fail';
		$row  =  0 ;
		$sql="INSERT INTO xsj_users(username,userpwd,useremail,userlevel,rname) VALUES";
		if (($handle=fopen($path,"r"))!==FALSE) {
			if('csv'==$ext){
				while (($data=fgetcsv($handle,1000,","))!==FALSE){
					$num=count($data);
					$str='(';
					for($c=0;$c<$num;$c++){
						$ds=iconv("gb2312","utf-8",$data[$c]);
						$ds=trim($ds);
						if($c==1)
						$str.="'".md5($ds)."',";
						else $str.="'".$ds."',";
					}
					$str=rtrim($str,',');
					$str.='),';
					$row++;
					$sql.=$str;
				}
				$sql=rtrim($sql,',');
			}
			if('txt'==$ext){
				while (( $line  =  fgets($handle,1000)) !==  FALSE ) {
					$data=explode(",", $line);
					$num=count($data);
					$str='(';
					for($c=0;$c<$num;$c++){
						$ds=iconv("gb2312","utf-8",$data[$c]);
						$ds=trim($ds);
						if($c==1)
						$str.="'".md5($ds)."',";
						else $str.="'".$ds."',";
					}
					$str=rtrim($str,',');
					$str.='),';
					$row++;
					$sql.=$str;
				}
				$sql=rtrim($sql,',');
			}
			//插入数据库(时间可能较长)
			$trac=Yii::app()->db->beginTransaction();
			$p=Yii::app()->db->createCommand($sql)->execute();
			if($p){
				$trac->commit();
				return $row;
			}
			else {
				$trac->rollback();
				return 'fail';
			}
			fclose ( $handle );
		}else return 'fail';
			

	}
}
