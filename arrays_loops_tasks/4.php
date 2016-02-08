<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$arr = array(
			'green'=>'зеленый', 
			'red'=>'красный',
			'blue'=>'голубой'	
			);
foreach ($arr as $key => $color){
	echo $key .' => ';
	echo $color."<br>";
}
?>