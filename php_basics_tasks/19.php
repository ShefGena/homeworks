<?php
header('Content-Type: text/html; charset=utf-8');
$a = '78';
$b = 78;
if($a == $b){ 
	echo 'равны';
}else{
	echo 'не равны';
}
echo'<br />';
var_dump($a);
echo "& ";
var_dump($b);
?>