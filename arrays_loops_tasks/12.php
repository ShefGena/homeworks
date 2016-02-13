<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$sum = '';
$n = 1000;
for($n; $n>50; $n/=2){
	$sum++;
}
echo $sum;
?>