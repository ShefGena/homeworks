<?php
header('Content-Type: text/html; charset=utf-8');
$day = 4;
switch ($day) {
	case 0:
		echo '$day is 0. Its impossible';
		break;
	case 1:
	case 2:
	case 3:
	case 4:
	case 5:
		echo 'Это рабочий день';
		break;
	}
?>