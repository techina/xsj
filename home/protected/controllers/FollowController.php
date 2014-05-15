<?php

class FollowController extends BaseController {


	public function actionAdd(){
		$id=$_GET['id'];
		$un=$_SESSION['userinfo']['username'];
		$g=Follow::model();
		$d=$g->findAll("forumid=$id and username='$un'");
		if(!$d){
			$f=new Follow();
			$f->forumid=$id;
			$f->username=$un;
			$f->rname=$_SESSION['userinfo']['rname'];
			$f->fotime=Format::timeToPRC();
			if($f->save())
			echo 'ok';
			else echo 'fail';
		}else echo 'seco';
	}

	public function actionI(){
		$na=$_SESSION['userinfo']['username'];
		$sql = "select f.*,r.title from xsj_follow f left join xsj_forum r on f.forumid=r.id where f.username='$na' order by f.fotime DESC ";
		$sqlc = "username='$na'";
		$f=Follow::model();
		$count=$f->count($sqlc);
		$page=new Page($count);
		$posts=Yii::app()->db->createCommand($sql.$page->limit)->queryAll();
		$pages=$page->fpage();
		$smarty=Yii::app()->smarty;
		$smarty->assign("infolist",$posts);
		$smarty->assign("pages",$pages);

		$smarty->display('cli/follow/index.html');
	}

	public function actionDel(){
		$id=$_GET['id'];
		$c=Follow::model();
		$d=$c->deleteAll("id=$id");
		if($d)
		echo $id;
		else echo 'fail';
	}
}