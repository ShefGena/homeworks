<?php
header('Content-Type: text/html; charset=utf-8');
$a = 20;
var_dump((bool)$a); //Приведение числовых значений к логическим осуществляется по следующему правилу: результатом будет false, если исходное значение было 0. В остальных случаях результатом будет true. В нашем случае переменная "а" не равна 0. 
?>