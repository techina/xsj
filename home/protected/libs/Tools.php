<?php
//error_reporting(0);
//***********************************************************************
//*                                 创建一个唯一的字符序列
//***********************************************************************

function OrderId($cutNum=20)  {
	srand(microtime(TRUE) * 999999999999);
	$unique_string = sha1(uniqid().uniqid(mt_rand(100000000000,999999999999)));
	$unique_id ='';
	for($i=0,$j=strlen($unique_string);$i<$j;$i++)
	$unique_id .= ord($unique_string{$i});
	return substr(date('Ymd').$unique_id,0,$cutNum);
}
/*
 * 创建一个UUID
 * */
function createId()
{
	$microTime = microtime();
	list($a_dec, $a_sec) = explode(" ", $microTime);
	$dec_hex = dechex($a_dec* 1000000);
	$sec_hex = dechex($a_sec);
	ensure_length($dec_hex, 5);
	ensure_length($sec_hex, 6);
	$guid = "";
	$guid .= $dec_hex;
	$guid .= create_guid_section(3);
	$guid .=create_guid_section(4);
	$guid .=create_guid_section(4);
	$guid .= create_guid_section(4);
	$guid .= $sec_hex;
	$guid .= create_guid_section(6);
	return $guid;
}

function create_guid_section($characters)
{
	$return = "";
	for($i=0; $i<$characters; $i++)
	{
		$return .= dechex(mt_rand(0,15));
	}
	return $return;
}

function ensure_length(&$string, $length)

{
	$strlen = strlen($string);
	if($strlen < $length)
	{
		$string = str_pad($string,$length,"0");
	}
	else if($strlen > $length)
	{
		$string = substr($string, 0, $length);
	}
}
//**********************************************************************
//**********************************************************************
//                                    随即创建文件新路径
//**********************************************************************

function NewPath($path) {
	$base_dir=$path;
	$d=rand(1, 100);
	$dir=$base_dir.$d;
	if (is_dir($dir)==false){mkdir($dir, 0644);}
	return $dir."/";
}


?>