<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$arr = array(
			4,
			2,
			5,
			19,
			13,
			0,
			10
			);
foreach($arr as $x){
	if($x==4 OR $x==2 OR $x==3){
		echo "Est!";break;
	}else{
		echo "Net!";
	}
	}
?>