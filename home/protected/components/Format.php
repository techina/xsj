<?php
class Format{
	public static  function timeToPRC(){
		$time=time();
		$prctime=date("Y-m-d H:i:s",$time);
		return $prctime;
	}
}

?>