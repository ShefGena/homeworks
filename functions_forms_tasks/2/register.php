<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
function sorty($a,$b){
	if($_POST){
	$newMas = $_POST['userMessage'];
	$arr = explode(' ', $newMas);
	}
	return strlen($b)-strlen($a);
}
usort($arr,$_POST);
echo'<pre>';
print_r(array_slice($arr, 0, 3));
?>



