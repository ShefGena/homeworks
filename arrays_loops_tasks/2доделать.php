<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$a = array('1', '20', '15', '17', '24', '35');
foreach ($a as $b){
	echo "sum(b) = " . array_sum($b) . "\n";
}
?>