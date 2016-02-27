<html>
	<head>
		<title>Registration form</title>
		<meta charset = "utf-8">
	</head>
	<body>
	<form action="" method="POST" enctype = 'multipart/form-data'>
		<input type="file" multiple="multiple" name="filenames[]">
		<br>
		<br>
		<input type = "submit" name="submit">
	</form>
<?php
error_reporting(E_ALL);
echo '<pre>';
$files = scandir("gallery/");

foreach($files as $v){
	if(($v!='.'AND $v!='..')){
	echo "<img src=http://homeworks/functions_forms_tasks/6/gallery/$v style ='width:300px; height:300px;'>";
}
}
//print_r($_FILES);             getimagesize - PROCHITAT!!!!
	if(isset($_POST['submit'])){
	//print_r($_POST);
	//print_r($_FILES);
	
	foreach($_FILES['filenames']['name']as $k=>$name){
		if($_FILES['filenames']['size'][$k]<5120){
		if(getimagesize($_FILES['filenames']['tmp_name'][$k])){
		move_uploaded_file($_FILES['filenames']['tmp_name'][$k], 'gallery/'.$name);	
		}
	
		}
	}
	
	}
?>
</body>
</html>