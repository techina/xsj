<?php

class CommentController extends BaseController {


	public function actionadd(){
		$id=$_POST['forumid'];
		$tx=$_POST['pubmess'];
		$f=new Comment();
		$f->forumid=$id;
		$f->username=$_SESSION['userinfo']['username'];
		$f->rname=$_SESSION['userinfo']['rname'];
		$f->content=$tx;
		$f->ctime=Format::timeToPRC();
		if($f->save())
		Yii::success("评论成功","/index.php?r=forum/info&id=$id",3);
		else Yii::error("评论失败","/index.php?r=forum/info&id=$id",3);
	}
	public function actionDel(){
		$id=$_GET['id'];
		$c=Comment::model();
		$d=$c->deleteAll("id=$id");
		if($d)
		echo $id;
		else echo 'fail';
	}
	
	public function actionI(){
		$na=$_SESSION['userinfo']['username'];
		$sql = "select f.*,r.title from xsj_comment f left join xsj_forum r on f.forumid=r.id where f.username='$na' order by f.ctime DESC ";
		$sqlc = "username='$na'";
		$f=Comment::model();
		$count=$f->count($sqlc);
		$page=new Page($count);
		$posts=Yii::app()->db->createCommand($sql.$page->limit)->queryAll();
		$pages=$page->fpage();
		$smarty=Yii::app()->smarty;
		$smarty->assign("infolist",$posts);
		$smarty->assign("pages",$pages);

		$smarty->display('cli/comment/index.html');
	}

}
