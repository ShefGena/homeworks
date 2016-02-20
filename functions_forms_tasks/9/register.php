<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
function reverse(){
	if($_POST){
	$newMas = $_POST['userMessage'];
	echo strrev($newMas);
	}
}
reverse();
?>