<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$n = 1000;
$cnt = '';
while($n>=50){
	$n/=2;
	$cnt++;
}
echo $cnt;
?>