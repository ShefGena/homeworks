<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
	td, tr, th{
		border:1px solid black;
	}
	.st{
		background:yellow;
	}
	
	</style>
</head>
<body>
<table>
<?php
error_reporting(E_ALL);
$cols = 5;
$rows = 5;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$rands = array_rand($colors, 1);
$bac = $colors[$rands];
echo $bac;
for($i=1; $i<=$cols; $i++){
	echo "<tr style=background:$bac>";
		for($j=1; $j<=$rows; $j++){
			if(($i==1)OR($j==1)){
				$tag = "th";
			}else{
				$tag ="td style=background:$bac";
			}
			echo "<$tag>";
				echo $i*$j;
			echo "</$tag>";
		}
	echo "</tr>";
	
}
?>
</table>
</html>