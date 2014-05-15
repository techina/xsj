<?php

class ForumController extends MController{
	public function actionIndex(){
		$sql = "select id,title,ftime,username,rname,istop from xsj_forum order by ftime DESC ";
		$f=Forum::model();
		$count=$f->count();
		$page=new Page($count);
		$posts=$f->findAllBySql($sql.$page->limit);
		$pages=$page->fpage();
		$smarty=Yii::app()->smarty;
		$smarty->assign("info",$posts);
		$smarty->assign("pages",$pages);
		$smarty->display('admin/forum/index.html');
	}
	
Public function actionMark(){
		$web= Forum::model();
		$id=$_GET['id'];
		$sta=$_GET['sta'];
		$s=$web->updateAll(array('istop'=>$sta),"id=$id");
		if($s)
		echo $id;
		else echo 'fail';
	}

}
