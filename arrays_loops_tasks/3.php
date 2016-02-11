<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$a = array('26', '17', '136', '12', '79', '15');
foreach($a as $b){
	$c[] = sqrt($b);
}
	echo array_sum($c) . '<br>';
?>


<?php
error_reporting(E_ALL);
//header('Content-Type: text/html; charset=utf-8');
$result = 0;
$arr = array('26', '17', '136', '12', '79', '15');
foreach ($arr as $v) {
$sq = sqrt($v);
echo (is_float($sq));
$result += $sq;
}
echo "Сумма элементов массива равна $result";
?>