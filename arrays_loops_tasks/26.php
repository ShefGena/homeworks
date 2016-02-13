<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$numbers = array(	
			rand(0, 100), 
			rand(0, 100), 
			rand(0, 100),
			rand(0, 100),
			rand(0, 100),
			rand(0, 100),
			rand(0, 100),
			rand(0, 100),
			rand(0, 100), 
			rand(0, 100));
echo '<pre>';
print_r($numbers);
echo '</pre>';
$numCnt = count($numbers);
 
for($i = 0, $j = 1; $i < $numCnt; $i++, $j++){
       
    if($j % 2 == 0)
        $result[] = $numbers[$i];
}
 
echo implode(', ', $result).'<br />';
echo 'Сумма '.array_sum($result);
?>
