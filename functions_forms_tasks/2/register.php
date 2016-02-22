<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
function expText(){
	if($_POST){
	$newMas = $_POST['userMessage'];
	global $arr;
	$arr = explode(' ', $newMas);
	}
	echo '<pre>';
	print_r($arr);}
expText();
function sorty($a,$b){
    return strlen($b)-strlen($a);
}
usort($arr,'sorty');
echo 'Самые длинные слова: ' . $arr[0] . ', ' . $arr[1] . ', ' . $arr[2];
?>