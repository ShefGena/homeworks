<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$dir = __DIR__;
$files1 = scandir($dir);
$files2 = scandir($dir, 1);
echo '<pre>';
print_r($files1);
?>