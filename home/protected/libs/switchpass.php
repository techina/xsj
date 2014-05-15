
<?php 
	function  SPass($str) {
		$ns1 = "";
		$ns2 = "";
		$ns3 = "";
		$ns4 = "";
		$p = 0;

		$c = str_split($str);
		
		for ($k = 0; $k < strlen($str); $k++){
			$c[$k]=MoveRight($c[$k]);
		}
	
		foreach ($c as $i)
			$ns1 .= $i."";

		$p = strlen($ns1);
		if ($p % 2 == 0) {
			$ns2 = substr($ns1,0, $p / 2);
			$ns3 = substr($ns1,$p - ($p / 2), $p);
		}
		else{
			$ns2 = substr($ns1,0,$p / 2);
			$ns3 = substr($ns1,$p - ($p / 2), $p);
		}
		$ns1=$ns3.$ns2;

		$c1 = str_split($ns1);
		for ($k = 0; $k <strlen($ns1); $k++){
			$c1[$k]=MoveRight($c1[$k]);
		}
	foreach ($c1 as $i)
			$ns4 .= $i."";
		return $ns4;
	}

function Restore($str) {
		$ns1 = "";
		$ns2 = "";
		$ns3 = "";
		$ns4 = "";
		$p = 0;
	
		$c = str_split($str);
		for ($k = 0; $k <strlen($str); $k++){
			$c[$k]=MoveLeft($c[$k]);
		}
		foreach ($c as $i)
			$ns1 .= $i."";
			
		$p = strlen($ns1);
		
		if ($p % 2 == 0) {
			$ns2 =substr($ns1,0, $p / 2);
			$ns3 =substr($ns1,$p - ($p / 2), $p);
		}
		else{
			$ns2 =substr($ns1,0,$p / 2+1);
			$ns3 =substr($ns1,$p - ($p / 2)+1, $p);
		}
		$ns1=$ns3.$ns2;
	
		$c1 = str_split($ns1);
		for ($k = 0; $k <strlen($ns1); $k++){
			$c1[$k]=MoveLeft($c1[$k]);
		}
		foreach ($c1 as $i)
			$ns4 .= $i."";
		return $ns4;
	}
	//>>2
function MoveRight($c){
	$k=ord($c);
	$c1="";
	if($k>=48 && $k<=57){
		$c1=chr($k+2);
		if(ord($c1)>57)
			$c1=chr(ord($c1)-10);
	}
if($k>=65 && $k<=90){
		$c1=chr($k+2);
		if(ord($c1)>90)
			$c1=chr(ord($c1)-26);
	}
if($k>=97 && $k<=122){
		$c1=chr($k+2);
		if(ord($c1)>122)
			$c1=chr(ord($c1)-26);
	}
	
	if($k==95||$k==45||$k==64||$k==46){
		$c1=$c;
	}
	return $c1;
}
//2<<
function MoveLeft($c){
	$k=ord($c);
	$c1="";
	if($k>=48 && $k<=57){
		$c1=chr($k-2);
		if(ord($c1)<48)
			$c1=chr(ord($c1)+10);
	}
if($k>=65 && $k<=90){
		$c1=chr($k-2);
		if(ord($c1)<65)
			$c1=chr(ord($c1)+26);
	}
if($k>=97 && $k<=122){
		$c1=chr($k-2);
		if(ord($c1)<97)
			$c1=chr(ord($c1)+26);
	}

	if($k==95||$k==45||$k==64||$k==46){
		$c1=$c;
	}
	return $c1;
}
?>