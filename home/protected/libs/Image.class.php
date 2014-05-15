<?php
//error_reporting(0);
//session_start();
class Image{
	//图片保存路径
	private $path;

	function __construct($path='/'){
		$this->path=rtrim($path,'/').'/';
	}

	//缩放图片
	function  thumb($name,$width=245,$height=1,$qz='th_'){
		$imgInfo=$this->getInfo($name);
		$srcImg=$this->getImg($name, $imgInfo);
		$size=$this->getNewSize($name, $width, $height, $imgInfo);
		$newImg=$this->kidOfImage($srcImg, $size, $imgInfo);
		return $this->createNewImage($newImg, $qz.$name, $imgInfo);
	}
	//固定缩放
	function  logo($name,$width=127,$height=34,$qz=''){
		$size['width']=$width;
		$size['height']=$height;
		$imgInfo=$this->getInfo($name);
		$srcImg=$this->getImg($name, $imgInfo);
		$newImg=$this->kidOfImage($srcImg, $size, $imgInfo);
		return $this->createNewImage($newImg, $qz.$name, $imgInfo);
	}

	//添加水印
	function waterMark($groundName,$waterName,$waterPos=0,$qz='wa_'){
		$curpath=rtrim($this->path,'/').'/';
		$dir=dirname($waterName);
		if ($dir=='.')
		$wpath=$curpath;
		else {
			$wpath=$dir.'/';
			$waterName=basename($waterName);
		}

		if (file_exists($curpath.$groundName)&&file_exists($wpath.$waterName)) {
			$groundInfo=$this->getInfo($groundName);
			$waterInfo=$this->getInfo($waterName,$dir);
			if(!$pos=$this->position($groundInfo, $waterInfo, $waterPos)){
				echo '水印不能比图片大!';
				return false;
			}
			$groundImg=$this->getImg($groundName, $groundInfo);
			$waterImg=$this->getImg($waterName, $waterInfo);
			return $this->createNewImage($groundImg, $qz.$groundName, $groundInfo);
		}else{
			echo '图片或者水印图片不存在!';
			return false;
		}
	}


	//裁剪指定区域图片
	function cut($name,$x,$y,$width,$height,$qz='cu_'){
		$imgInfo=$this->getInfo($name);
		if ((($x+$width)>$imgInfo['width'])||(($y+$height)>$imgInfo['height'])) {
			echo '裁剪范围超出图片范围';
			return false;
		}
		$back=$this->getImg($name, $imgInfo);
		$cutimg=imagecreatetruecolor($width, $height);
		imagecopyresampled($cutimg, $back, 0, 0, $x, $y, $width, $height, $width, $height);
		imagedestroy($back);
		return $this->createNewImage($cutimg, $qz.$name, $imgInfo);

	}

	//确定水印图片位置
	private function position($groundInfo,$waterInfo,$waterPos){
		$gw=$groundInfo['width'];
		$gh=$groundInfo['height'];
		$ww=$waterInfo['width'];
		$wh=$waterInfo['height'];
		if (($gw<$ww)||($gh<$wh))
		return false;
		$X=0;$Y=0;
		switch ($waterPos){
			case 1:$X=0;$Y=0;break;
			case 2:$X=($gw-$ww)/2;$Y=0;break;
			case 3:$X=$gw-$ww;$Y=0;break;
			case 4:$X=0;$Y=($gh-$wh)/2;break;
			case 5:$X=($gw-$ww)/2;$Y=($gh-$wh)/2;break;
			case 6:$X=($gw-$ww);$Y=($gh-$wh)/2;break;
			case 7:$X=0;$Y=($gh-$wh);break;
			case 8:$X=($gw-$ww)/2;$Y=($gh-$wh);break;
			case 9:$X=($gw-$ww);$Y=($gh-$wh);break;
			case 0:
			default:$X=rand(0,$gw-$ww);$Y=rand(0,$gh-$wh);break;
		}
		return array('posX'=>$X,'posY'=>$Y);
	}

	//获取图片属性信息
	private function getInfo($name,$path='.'){
		$spath=($path=='.'?rtrim($this->path,'/').'/':$path.'/');
		$data=getimagesize($spath.$name);
		$imgInfo['width']=$data[0];
		$imgInfo['height']=$data[1];
		$imgInfo['type']=$data[2];
		return $imgInfo;
	}

	//创建各种支持格式的图片资源
	private function getImg($name,$imgInfo,$path='.'){
		$spath=$path=='.'?rtrim($this->path,'/').'/':$path.'/';
		$srcPic=$spath.$name;
		switch ($imgInfo['type']){
			case 1:$img=imagecreatefromgif($srcPic);break;
			case 2:$img=imagecreatefromjpeg($srcPic);break;
			case 3:$img=imagecreatefrompng($srcPic);break;
			default:return false;break;
		}
		return $img;
	}

	//返回等比例缩放图片的宽度和高度,如果原图比缩放后图片小,则保持不变
	private function getNewSize($name,$width=245,$height,$imgInfo){
		$size['width']=$imgInfo['width'];
		$size['height']=$imgInfo['height'];
		if ($width<$imgInfo['width']) {
			$size['width']=$width;
		}
		if ($height<$imgInfo['height']) {
			$size['height']=$height;
		}
		if ($imgInfo['width']*$size['width']>$imgInfo['height']*$size['height']) {
			$size['height']=round($imgInfo['height']*$size['width']/$imgInfo['width']);
		}else{
			$size['width']=round($imgInfo['width']*$size['height']/$imgInfo['height']);
		}
		return $size;
	}

	//保存图片,并保留原有格式
	private function createNewImage($newImg,$newName,$imgInfo){
		$this->path=rtrim($this->path,'/').'/';
		switch ($imgInfo['type']) {
			case 1:
				$res=imagegif($newImg,$this->path.$newName);
				break;
			case 2:
				$res=imagejpeg($newImg,$this->path.$newName);
				break;
			case 3:
				$res=imagepng($newImg,$this->path.$newName);
				break;
		}
		imagedestroy($newImg);
		return $newName;
	}

	//加水印时复制图像
	private function copyImage($groundImg,$waterImg,$pos,$waterInfo){
		imagecopy($groundImg, $waterImg, $pos['posX'], $pos['posY'], 0, 0, $waterInfo['width'], $waterInfo['height']);
		imagedestroy($waterImg);
		return $groundImg;
	}

	//处理带有透明度的图片保持不变
	private function kidOfImage($srcImg,$size,$imgInfo){
		$newImg=imagecreatetruecolor($size['width'], $size['height']);
		$otsc=imagecolortransparent($srcImg);
		if ($otsc>=0&&$otsc<imagecolorstotal($srcImg)) {
			$transparentcolor=imagecolorsforindex($srcImg, $otsc);
			$newtransparentcolor=imagecolorallocate($newImg, $transparentcolor['red'], $transparentcolor['green'], $transparentcolor['blue']);
			imagefill($newImg, 0, 0, $newtransparentcolor);
			imagecolortransparent($newImg,$newtransparentcolor);
		}
		imagecopyresized($newImg, $srcImg, 0, 0, 0, 0, $size['width'], $size['height'], $imgInfo['width'], $imgInfo['height']);
		imagedestroy($srcImg);
		return $newImg;
	}
}










?>