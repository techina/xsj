<?php

/**
 * Description of CSmarty
 * @copyright  copyright(2011) weibo.com all rights reserved
 * @author weibo.com php team
 * @modifier zhangjianfeng
 * @date 2014-4-3
 * @package 
 */
require_once Yii::getPathOfAlias("application.vendors.Smarty3") . DIRECTORY_SEPARATOR . 'Smarty.class.php';
define("SMARTY_VIEW_DIR", Yii::getPathOfAlias('application.views'));

class CSmarty extends Smarty {

    const DIR_SEP = DIRECTORY_SEPARATOR;

    function init() {
        parent::__construct();
        $this->template_dir = SMARTY_VIEW_DIR . self::DIR_SEP . 'tpl';
        $this->compile_dir = SMARTY_VIEW_DIR . self::DIR_SEP . 'tpl_c';
        $this->caching = false;
        $this->cache_dir = SMARTY_VIEW_DIR . self::DIR_SEP . 'cache';
        $this->left_delimiter = '<%';
        $this->right_delimiter = '%>';
        //$this->cache_lifetime = 3600;
    }

}
