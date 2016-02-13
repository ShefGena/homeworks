<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$arr = array(4, 2, 5, 19, 13, 0, 10);
$count = '';
foreach($arr as $x){
	$count++;
}
echo $count;
?>