<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
function reverse(){
	if($_POST){
	$newMas = $_POST['userMessage'];
	$arr = explode(' ', $newMas);
	$cnt = array_count_values($arr);
	arsort($cnt);
	foreach($cnt as $key=>$a){
		echo "$key - $a<br>";
		}
	}
}
reverse ();
?>


