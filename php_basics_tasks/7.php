<?php
header('Content-Type: text/html; charset=utf-8');
$age = 16;
if ($age > 18 and $age <= 59){
	echo "Вам еще работать и работать";	
}elseif($age > 59){
	echo "Вам пора на пенсию";
}elseif($age > 0 and $age <= 17){
	echo "Вам еще рано работать";
}
?>