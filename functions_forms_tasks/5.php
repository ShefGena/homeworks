<?php
function sovpadenieNeDumau($x, $y){
$output = array_slice($x, 2);
echo '<pre>';
print_r($output);
foreach($output as $arr){
	if($arr == $y){
		echo "est sovpadenie, i eto file $arr" . '<br>';
	}else{
		echo'';
	}
}
}
$z = scandir(__DIR__);
$word = 'DZ-chat';
sovpadenieNeDumau($z, $word);
?>