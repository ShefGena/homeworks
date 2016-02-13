<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$arr = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
$day = date("l");
foreach($arr as $m){	
if($m==$day){$m ='<b>' . $m .'</b>';}
echo '<pre>';
print_r($m);
echo '<pre>';}
?>