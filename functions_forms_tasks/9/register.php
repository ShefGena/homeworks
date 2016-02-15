<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
/*function strToArr($string){
	$arr = str_split($string);
echo '<pre>';
print_r($arr);
echo '</pre>';
arsort($arr);
echo '<pre>';
print_r($arr);
echo '</pre>';
foreach($arr as $a){
		echo "$a";
};
return;
}
$string_1 = 'abcde';
strToArr($string_1);*/
if ($_GET){
	foreach($_GET as $key=>$value){
	echo "В поле {$key} вы ввели {$value}<br>";}
}else{
		echo "Pustoy";
	}

?>