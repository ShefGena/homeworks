<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
echo 'Первый способ';
print("Второй способ");
echo <<<LABEL
Третий способ вывода данных
LABEL;
?>