<?php

/**
 * Description of IndexController
 * @copyright  copyright(2011) weibo.com all rights reserved
 * @author weibo.com php team
 * @modifier zhangjianfeng
 * @date 2014-4-7
 * @package 
 */
class IndexController extends MController {
    public function actionIndex(){
    	
        $smarty = Yii::app()->smarty;
        $smarty->display('admin/index.html');
    }
}
