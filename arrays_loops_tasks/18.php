<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$arr = array('Пн','Вт','Ср','Чт','Пт','Сб','Вс');
$one = 'Сб';
$two = 'Вс';
foreach($arr as $m){	
if($m==$one OR $m==$two){$m ='<b>' . $m .'</b>';}
echo '<pre>';
print_r($m);
echo '<pre>';}
?>