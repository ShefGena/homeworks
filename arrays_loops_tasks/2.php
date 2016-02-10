<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$result = 0;
$arr = array('1', '20', '15', '17', '24', '35');
foreach ($arr as $v) {
$result += $v;
}
echo "Сумма элементов массива равна $result";
?>