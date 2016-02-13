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
$cols = 10;
$rows = 10;
for($i=1; $i<=$cols; $i++){
	echo "<tr>";
		for($j=1; $j<=$rows; $j++){
			if(($i==1)OR($j==1)){
				$tag = "th";
			}else{
				$tag ="td";
			}
			if($i==$j){
				$style="class=st";
			}else{
			$style='';}
			echo "<$tag $style>";
				echo $i*$j;
			echo "</$tag>";
		}
	echo "</tr>";
	
}
?>
</table>
</html>