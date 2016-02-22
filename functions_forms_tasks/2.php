<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
function sorty($a,$b){
    return strlen($b)-strlen($a);
}
$newMas = 'Несмотря на то, что дизайнеры разрабатывают страницы, надеясь на то, что люди будут скрупулезно вчитываться в текст';
$arr = explode(' ', $newMas);
usort($arr,'sorty');
echo'<pre>';
print_r(array_slice($arr, 0, 3));
?>
