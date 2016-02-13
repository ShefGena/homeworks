<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
for($a=1; $a<=5; $a++){
	for($i=1; $i<=$a; $i++){
		echo $a;
	}
echo '<br>';
}
?>