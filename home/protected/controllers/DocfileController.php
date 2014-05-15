<?php

class DocfileController extends BaseController {


	public function actionIndex(){
		$id=$_GET['id'];
		$g=Docfile::model();
		$ds=$g->findAll("id=$id");
		$d=$ds[0]->attributes;
		if($d){
				
			$file_name = urldecode($d['docname']);
			//用以解决中文不能显示出来的问题
			$file_name = iconv("utf-8", "gb2312", $file_name);
			$file_path = $d['docpath'];
			//首先要判断给定的文件存在与否
			if (!file_exists($file_path)) {
				//Yii::error('没有该文件','/index.php?r=notice',3);
				exit;
			}
			$fp = fopen($file_path, "r");
			$file_size = filesize($file_path);
			//下载文件需要用到的头
			header("Content-type:text/html;charset=utf-8");
			Header("Content-type: application/octet-stream");
			Header("Accept-Ranges: bytes");
			Header("Accept-Length:" . $file_size);
			Header("Content-Disposition: attachment; filename=" . $file_name);
			$buffer = 1024;
			$file_count = 0;
			//向浏览器返回数据
			while (!feof($fp) && $file_count < $file_size) {
				$file_con = fread($fp, $buffer);
				$file_count+=$buffer;
				echo $file_con;
			}
			fclose($fp);
		}
	}

}