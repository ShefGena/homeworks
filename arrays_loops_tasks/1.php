<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$a = array('html', 'css', 'php', 'js', 'jq');
foreach ($a as $b){
	echo "$b <br />";
}
?>