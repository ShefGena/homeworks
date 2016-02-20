<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
function strToUpp($x){
	$arr = explode('. ', $x);
	foreach($arr as $string){
		echo mb_substr(mb_strtoupper($string,'utf-8'),0,1,'utf-8').mb_substr($string,1,mb_strlen($string,'utf-8'),'utf-8');
		echo '. ';
		}
} 
strToUpp('а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти');
?>


