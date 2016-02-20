<?php
include_once "msgs.lib.php";  // выведет все что может require не выведет ничего если нет подключаемого файла
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Регистрационная форма</title>
</head>
<body>
	<form method="POST" action="index.php">
		<p>Введите свое имя</p>
		<input type="text" name="userName" placeholder="Введите name" />
		<p>Оставьте свое сообщение</p>
		<textarea name="userMessage" rows="7" cols="35"></textarea>
		<br>
		<input type = "submit" value="Отправить форму" name="submit"/>
	</form>
	
<?php
$messages = getContent();
$messages = addContent($messages);
showContent($messages);
?>