<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
function strToArr($string){
	$arr = explode('. ', $string);
echo '<pre>';
print_r($arr);
echo '</pre>';
arsort($arr);
echo '<pre>';
print_r($arr);
echo '</pre>';
foreach($arr as $a){
		echo "$a. <br>";
};
return;
}
$string_1 = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти';
strToArr($string_1);
?>