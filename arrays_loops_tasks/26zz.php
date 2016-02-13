<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$arr = array(	
			1 => rand(0, 100), 
			rand(0, 100), 
			rand(0, 100),
			rand(0, 100),
			rand(0, 100),
			rand(0, 100),
			rand(0, 100),
			rand(0, 100),
			rand(0, 100), 
			rand(0, 100));
echo '<pre>';
print_r($arr);
echo '</pre>';			
foreach($arr as $key=>$a){
	if($key%2==1){
		$inc[]=$a; 
		echo '<br>';
	echo array_sum($inc);
	echo '<br>';}
}
?>