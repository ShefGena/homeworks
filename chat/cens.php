<?php
require_once "cens.lib";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Администрирование сайта</title>
</head>
<body>
	<div class="linkCes"> <a href="index.php">Вернуться в чат</a></div>
	<form method="POST" action="cens.php">
		<p>Введите слово</p>
		<input type="text" name="cens" placeholder="Введите слово"/><br>
		<br>
		<input type="submit" name="add" value="Добавить">
		<input type="submit" name="delete" value="Удалить">			
	</form>
<?php
$censWord = getCensWords();
addCensWords($censWord);
?>


</body>
</html>