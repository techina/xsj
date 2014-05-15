<?php

class IndexController extends BaseController {


    public function actionIndex(){

		$sql = "select id,title,ftime,username,rname from xsj_forum order by ftime DESC limit 0,30";
		$sqlh = "select id,title,ftime,username,rname from xsj_forum where istop=1 order by ftime DESC limit 0,10";
		$f=Forum::model();
		$p=$f->findAllBySql($sql);
		$ph=$f->findAllBySql($sqlh);
		$smarty=Yii::app()->smarty;
		$smarty->assign("hlist",$ph);
		$smarty->assign("list",$p);
        $smarty->display('cli/index.html');

    }


}
