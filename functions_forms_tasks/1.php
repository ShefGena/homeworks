<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Сравнение форм</title>
</head>
<body>
	<form method="POST" action="1.php">
		<p>Введите текст в поле 1:</p>
		<textarea name="text1" placeholder="Поле 1" rows="7" cols="35"></textarea>
		<br>
		<p>Введите текст в поле 2:</p>
		<textarea name="text2" placeholder="Поле 2" rows="7" cols="35"></textarea>
		<br>
		<br>
		<input type = "submit" value="Отправить форму" name="submit"/>
	</form>
<?php
echo '<pre>';
	
function getCommonWords($a, $b){	
	if(isset($_POST['submit'])){
		$a = preg_split("/[\s,]+/", ($_POST['text1']));
		$b = preg_split("/[\s,]+/", ($_POST['text2']));
		$result = array_intersect($a, $b);
		echo "Список совпадающих слов:<br>";
		foreach($result as $arr){
			echo "$arr;".'<br>';
		}
	}
}
getCommonWords($a,$b);	
?>