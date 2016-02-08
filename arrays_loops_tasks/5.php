<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$arr = array(
			'Коля'=>'200', 
			'Вася'=>'300',
			'Петя'=>'400'	
			);
foreach ($arr as $key => $zarplata){
	echo $key .' - зарплата ';
	echo $zarplata.'$' . "<br>";
}
?>