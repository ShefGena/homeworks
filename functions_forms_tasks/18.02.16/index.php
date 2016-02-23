<?php
include_once "msgs.lib.php";  // выведет все что может require не выведет ничего если нет подключаемого файла
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Регистрационная форма</title>
	<style type="text/css">
   #layer1 {	
	 width:450px;
	 float:right; 
	 background-color:#5F9EA0;
	 color:#D8D8D8;
	 font-style:italic;
	 -moz-border-radius: 5px;
	 -webkit-border-radius: 5px;
	 border-radius: 5px;
   background-position:top center; 
   background-repeat:no-repeat; 
  text-align: justify; 
   }
   #layer2 {
   width:450px;
   clear:both; 
   background-color:#3CB371;
   color:#D8D8D8; 
   -moz-border-radius: 5px; 
   -webkit-border-radius: 5px;
   border-radius: 5px;
  background-position:top center;
  background-repeat:no-repeat;
  text-align: justify;
   
   }
   </style>
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