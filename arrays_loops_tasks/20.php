<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
//$a = 20;
for($a=1; $a<=20; $a++){
	for($i=1; $i<=$a; $i++){
		echo '+';
	}
echo '<br>';
}
?>