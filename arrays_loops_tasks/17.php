<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$arr = array('Jan','Feb','Mar','Apr','May','June','Jul','Aug','Sep','Oct','Nov','Dec');
$now = 'Feb';
foreach($arr as $m){	
if($m==$now){$m ='<b>' . $m .'</b>';}
echo '<pre>';
print_r($m);
echo '<pre>';}
?>