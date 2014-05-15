<?php

class SearchController extends BaseController{
	public function actionForum(){
		$t1=microtime();
		$kw = urldecode(trim($_GET['keyword']));
		$karr = explode(' ', $kw);
		$sql1="select id,title,ftime,username,rname from xsj_forum where ";
		$sql2= "title like '%$karr[0]%'";
		for ($index = 1; $index < count($karr); $index++)
		{
			$sql.=" or title like '%$karr[$index]%'";
		}
		$sql.=' order by ftime desc';

		$f=Forum::model();
		$count=$f->count($sql2);
		$page=new Page($count);
		$posts=$f->findAllBySql($sql1.$sql2.$page->limit);
		$pages=$page->fpage();
		$smarty=Yii::app()->smarty;
		$smarty->assign("infolist",$posts);
		$smarty->assign("pages",$pages);
		$smarty->assign("kw",$kw);
		$smarty->assign("count",$count);
		$t2=microtime();
		$t3=($t2-$t1)/1000;
		$smarty->assign("timecount",sprintf("%.5f",$t3));
		$smarty->display('cli/forum/search.html');
	}

	public function actionNotice(){
		$t1=microtime();
		$kw = urldecode(trim($_GET['keyword']));
		$karr = explode(' ', $kw);
		$sql1="select id,title,ntime,username,rname from xsj_notice where ";
		$sql2= "title like '%$karr[0]%'";
		for ($index = 1; $index < count($karr); $index++)
		{
			$sql.=" or title like '%$karr[$index]%'";
		}
		$sql.=' order by ntime desc';

		$f=Notice::model();
		$count=$f->count($sql2);
		$page=new Page($count);
		$posts=$f->findAllBySql($sql1.$sql2.$page->limit);
		$pages=$page->fpage();
		$smarty=Yii::app()->smarty;
		$smarty->assign("infolist",$posts);
		$smarty->assign("pages",$pages);
		$smarty->assign("kw",$kw);
		$smarty->assign("count",$count);
		$t2=microtime();
		$t3=($t2-$t1)/1000;
		$smarty->assign("timecount",sprintf("%.5f",$t3));
		$smarty->display('cli/notice/search.html');
	}

}
