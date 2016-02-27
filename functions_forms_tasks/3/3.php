<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Delete word</title>
</head>
<body>
	<form method="POST" action="3.php">
		<p>Введите цифру:</p>
		<input type ="text" name="num" />
		<br><br>
		<input type = "submit" value="Отправить форму" name="submit"/>
	</form>

<?php
echo '<pre>';
if($_POST){
	$num = $_POST['num'];
		if(is_numeric($num)){
		$num = (int)$num;             // $num - integer
		$file = fopen('1.txt', 'r');  //open the file
		$text = fread($file, filesize('1.txt'));    // read the file
		$textArr = preg_split("/[\s,]+/", $text);
		print_r($textArr);
		foreach($textArr as $arr){
			if($num <= iconv_strlen($arr, 'UTF-8')){
				$arrWord[] = $arr;
				echo $arr . ', ' ;
			}
		}		
		}else{
			echo "Ввести можно только цифру";
		}
}
?>