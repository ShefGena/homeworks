<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$a = 2;
while($a <= 10) {
	$j=1;
	while ($j<=$a){
		echo 'x';
		$j+=1;
	}
	echo '<br>';
	$a+=2;
}
?>
