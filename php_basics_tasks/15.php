<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$a = 12;
$b = 3;
switch ($operator = $a % $b){
	case($operator = $a + $b):
		echo $a + $b; break;
	case($operator = $a - $b):
		echo $a - $b; break;
	case($operator = $a * $b):
		echo $a * $b; break;
	case($operator = $a / $b):
		echo $a / $b; break;
	case($operator = $a % $b):
		echo $a % $b; break;
		}
?>