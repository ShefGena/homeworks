<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$a = 'j56';
if(!is_numeric($a)){
	echo "Введите корректное число";
}elseif($a==0){
	echo "Введите число отличное от 0";
}elseif(is_numeric($a)){
	$arr = str_split($a);
echo(array_sum($arr));
}
else{
	echo "Введите корректное число";
}
?>
