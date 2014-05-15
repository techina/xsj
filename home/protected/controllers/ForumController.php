<?php

class ForumController extends BaseController {

    public function actionIndex() {
        $na = $_GET['un'];
        if ($na) {
            $sql = "select id,title,ftime,username,rname from xsj_forum where username='$na' order by ftime DESC ";
            $sqlc = "username='$na'";
        } else {
            $sql = "select id,title,ftime,username,rname from xsj_forum order by ftime DESC ";
            $sqlc = "";
        }
        $f = Forum::model();
        $count = $f->count($sqlc);
        $page = new Page($count);
        $posts = $f->findAllBySql($sql . $page->limit);
        $pages = $page->fpage();
        $smarty = Yii::app()->smarty;
        $smarty->assign("infolist", $posts);
        $smarty->assign("pages", $pages);

        $smarty->display('cli/forum/index.html');
    }

    public function actionInfo() {
        $id = $_GET['id'];
        $sql = "select f.*,u.userpic from xsj_forum f left join xsj_users u on f.username=u.username where f.id=$id ";
        $sqlcom = "select f.*,u.userpic from xsj_comment f left join xsj_users u on f.username=u.username where f.forumid=$id order by f.ctime desc ";
        $sqlc = "forumid=$id";
        $c = Comment::model();
        $count = $c->count($sqlc);
        $page = new Page($count);
        $info = Yii::app()->db->createCommand($sql)->queryAll();
        $clist = Yii::app()->db->createCommand($sqlcom . $page->limit)->queryAll();
        $pages = $page->fpage();
        $smarty = Yii::app()->smarty;
        $smarty->assign("info", $info);
        $smarty->assign("cinfo", $clist);
        $smarty->assign("pages", $pages);
        $smarty->assign("id", $id);
        $smarty->display('cli/forum/info.html');
    }

    public function actionPost() {
        $smarty = Yii::app()->smarty;
        $smarty->assign("un", $_SESSION['userinfo']['username']);
        $smarty->display('cli/forum/post.html');
    }

    public function actionAdd() {
        $un = $_POST['un'];
        $tx = $_POST['pubmess'];
        $tl = $_POST['title'];
        $f = new Forum();
        $f->username = $un;
        $f->content = $tx;
        $f->title = $tl;
        $f->ftime=Format::timeToPRC();
        $f->rname = $_SESSION['userinfo']['rname'];
        if ($f->save())
            Yii::success("发表成功", "/index.php?r=forum", 3);
        else
            Yii::error("发表失败", "/index.php?r=forum/post", 3);
    }

    public function actionDel() {
        $id = $_GET['id'];
        $c = Forum::model();
        $co = Comment::model();
        $s=$c->dbConnection->beginTransaction();
        $d = $c->deleteAll("id=$id");
        $dd = $co->deleteAll("forumid=$id");
        if ($d && $dd){
        	$s->commit();
            Yii::success("删除成功", "/index.php?r=forum", 3);
            
        }
        else{
        	$s->rollback();
            Yii::error("删除失败", "/index.php?r=forum/info&id=$id", 3);
        }
    }

    public function actionDelr() {
        $id = $_GET['id'];
        $c = Forum::model();
        $co = Comment::model();
        $d = $c->deleteAll("id=$id");
        $dd = $co->deleteAll("forumid=$id");
        if ($d&&$dd)
            echo $id;
        else
            echo 'fail';
    }

}
