<?php
include_once "msgs.lib";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="linkCes"> <a href="Cens.php">Администрирование сайта</a></div><br>
<div class="inputMessage">
<form method="post" action="index.php">
    <h2>Введите свое имя</h2>
    <input class="textarea" type = "text" name = "userName">
    <h3>Оставьте свой коментарий</h3>
    <textarea class="textarea" name="userMessage" rows="7" cols="75" placeholder="Введите сообщение"></textarea>
    <br><br>
<input type="submit" name="submit" value="Отправить"><br><br>
</form>
</div>
<div class="chat">
<?php
$messages = getContent();
$messages = addContent($messages);
$messages = censContent ($messages);
showContent($messages);
?>
</div>
</body>
</html>