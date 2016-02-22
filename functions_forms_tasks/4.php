<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
function listFile($x){
	$files = scandir($x);
foreach($files as $arr){
	if($arr=='.' OR $arr == '..'){
		echo '';
	}else{
		echo $arr . '<br>';
	}
		}
}
listFile(__DIR__);
?>