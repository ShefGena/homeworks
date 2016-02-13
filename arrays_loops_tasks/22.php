<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
for($a=2; $a<=10; $a+=2){
	for($i=1; $i<=$a; $i++){
		echo 'x';
	}
echo '<br>';
}
?>