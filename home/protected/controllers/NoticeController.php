<?php

class NoticeController extends BaseController {

    public function actionIndex() {
        $sql = "select id,title,ntime,username,rname from xsj_notice where isimportant=0 order by ntime desc  ";
        $sqli = "select id,title,ntime,username,rname from xsj_notice where isimportant=1 order by ntime desc";
        $f = Notice::model();
        $count = $f->count("isimportant=0");
        $page = new Page($count);
        $posts = $f->findAllBySql($sql . $page->limit);
        $postsi = $f->findAllBySql($sqli);
        $pages = $page->fpage();
        $smarty = Yii::app()->smarty;
        $smarty->assign("infolisti", $postsi);
        $smarty->assign("infolist", $posts);
        $smarty->assign("pages", $pages);
        $smarty->display('cli/notice/notice.html');
    }

    public function actionInfo() {
        $id = $_GET['id'];
        $sql = "select f.*,u.userpic from xsj_notice f left join xsj_users u on f.username=u.username where f.id=$id ";
        $sqlfile = "select * from xsj_docfile where noticeid=$id order by dtime desc ";
        $info = Yii::app()->db->createCommand($sql)->queryAll();
        $clist = Yii::app()->db->createCommand($sqlfile)->queryAll();
        $smarty = Yii::app()->smarty;
        $smarty->assign("info", $info);
        $smarty->assign("cinfo", $clist);
        $smarty->display('cli/notice/info.html');
    }

    public function actionDel() {
        $id = $_GET['id'];
        $c = Notice::model();
        $d = $c->deleteAll("id=$id");
        if ($d)
            echo $id;
        else
            echo 'fail';
    }

    public function actionDelr() {
        $id = $_GET['id'];
        $c = Notice::model();
        $n=  Docfile::model();
        $d = $c->deleteAll("id=$id");
        $dd = $n->deleteAll("noticeid=$id");
        if ($d&&$dd)
            Yii::success("删除成功", "/index.php?r=notice", 3);
        else
            Yii::error("删除失败", "/index.php?r=notice/info&id=$id", 3);
    }

}
