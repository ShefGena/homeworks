<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$s = 100;
$t = 2;
echo $s / $t . ' км/ч <br>';
echo (int)(($s / $t) / 3.6 ). ' м/c';
?>