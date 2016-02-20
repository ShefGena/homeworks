<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
function strToArr($string){
	$arr = explode('. ', $string);
echo '<pre>';
print_r($arr);
echo '</pre>';
arsort($arr);

foreach($arr as $a){
		echo "$a. <br>";
};
return;
}
strToArr('А там хоть трава не расти. А ларчик просто открывался. А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.');
?>