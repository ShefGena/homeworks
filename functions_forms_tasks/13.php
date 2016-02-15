<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
$arr = explode(' ', $string);
$cnt = array_count_values($arr);
arsort($cnt);
foreach($cnt as $key=>$a){
	echo "$key - $a<br>";
}
?>