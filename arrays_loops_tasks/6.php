<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$arr = array(
							'green' => 'зеленый', 
							'red' => 'красный',
							'blue' => 'голубой');
foreach($arr as $key => $item){
	$en[] = $key;
	$ru[] = $item;
}
/*var_dump($en);
echo '<br>';
var_dump($ru);*/
echo '<pre>';
print_r($en);
echo '</pre>'; 
echo '<pre>';
print_r($ru);
echo '</pre>'; 
?>