<?php
include_once "msgs.lib.php";  // выведет все что может require не выведет ничего если нет подключаемого файла
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Регистрационная форма</title>
	<style type="text/css">
   #layer1 {	
	 width:40%;
	 padding-left:25px;
	 padding-right:25px;
	 float:right; 
	 background-color:#5F9EA0;
	 color:white;
	 font-style:italic;
	 -moz-border-radius: 5px;
	 -webkit-border-radius: 5px;
	  border-radius:10px 10px 0 10px;
   background-position:top center; 
   background-repeat:no-repeat; 
   text-align: justify; 
	 word-wrap: break-word;

   }
   #layer2 {
   width:40%;
   clear:both;
	 	 
   background-color:#3CB371;
	 font-style:italic;
	 padding-left:25px;
	 padding-right:25px;
	 padding-top :5px;
   color:white; 
   -moz-border-radius: 5px; 
   -webkit-border-radius: 5px;
    border-radius: 10px 10px 10px 0; 
  background-position:top center;
  background-repeat:no-repeat;
  text-align: justify;
	word-wrap: break-word;

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
		<p>Добавить слово в антимат:</p>
		<input type="text" name="antiMat" placeholder="Введите пожалуйста матюк" />
		<br>
		<br>
		<input type = "submit" value="Отправить форму" name="submit"/>
		</form>
	
<?php
$messages = getContent();
$messages = addContent($messages);
showContent($messages);
?>