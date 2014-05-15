<?php

/**
 * Description of WebnavController
 * @copyright  copyright(2011) weibo.com all rights reserved
 * @author weibo.com php team
 * @modifier zhangjianfeng
 * @date 2014-4-8
 * @package
 */
class NoticeController extends MController{
	public function actionIndex(){
		$sql = "select id,title,ntime,username,isimportant,rname from xsj_notice order by ntime desc  ";
		$f=Notice::model();
		$count=$f->count();
		$page=new Page($count);
		$posts=$f->findAllBySql($sql.$page->limit);
		$pages=$page->fpage();
		$smarty=Yii::app()->smarty;
		$smarty->assign("info",$posts);
		$smarty->assign("pages",$pages);
		$smarty->display('admin/notice/index.html');
	}


	public function actionAdd(){
		$smarty=Yii::app()->smarty;
		$smarty->display('admin/notice/add.html');
	}
	public function actionPost(){
		$smarty=Yii::app()->smarty;
		$smarty->display('admin/notice/add.html');
	}
	public function actionAddn(){
		$tx=$_POST['pubmess'];
		$tl=$_POST['title'];
		$f=new Notice();
		$f->username=$_SESSION['userinfo']['username'];
		$f->content=$tx;
		$f->title=$tl;
		$f->ntime=Format::timeToPRC();
		$f->rname=$_SESSION['userinfo']['rname'];
		if($f->save())
		Yii::success("发布成功","/index.php?r=admin/notice/add",3);
		else Yii::error("发布失败","/index.php?r=admin/notice/add",3);
	}
	public function actionEdit(){
		$id=$_GET['id'];
		$sql = "select * from xsj_notice where id=$id";
		$info=Yii::app()->db->createCommand($sql)->queryAll();
		$smarty=Yii::app()->smarty;
		$smarty->assign("info",$info);
		$smarty->display('admin/notice/edit.html');
	}
	Public function actionUpdate(){
		$web= Notice::model();
		$id=$_POST['id'];
		$attr['title']=$_POST['title'];
		$attr['content']=$_POST['content'];
		$s=$web->updateAll($attr,"id=$id");
		if($s)
		Yii::success("修改成功","./index.php?r=admin/notice/edit&id=$id",3);
		else Yii::error("修改失败","./index.php?r=admin/notice/edit&id=$id",3);
	}

	Public function actionMark(){
		$web= Notice::model();
		$id=$_GET['id'];
		$sta=$_GET['sta'];
		$s=$web->updateAll(array('isimportant'=>$sta),"id=$id");
		if($s)
		echo $id;
		else echo 'fail';
	}
}
