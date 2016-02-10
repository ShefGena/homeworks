<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$a = array('2', '5', '9', '15', '0', '4');
foreach ($a as $b){
if($b > 3 AND $b < 10){
	echo $b . '<br>';
}
}
?>