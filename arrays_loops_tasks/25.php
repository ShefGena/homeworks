<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$a = array(	rand(0, 100), 
			rand(0, 100), 
			rand(0, 100),
			rand(0, 100),
			rand(0, 100),
			rand(0, 100),
			rand(0, 100),
			rand(0, 100),
			rand(0, 100), 
			rand(0, 100)); 
echo '<pre>';
print_r($a);
echo '</pre>';
echo max($a) . ' & ' .min($a);
$ma = array_search(max($a), $a);
$mi = array_search(min($a), $a);
list($a[$ma], $a[$mi]) = array($a[$mi], $a[$ma]);
echo '<pre>';
print_r($a);
echo '</pre>';
?>
