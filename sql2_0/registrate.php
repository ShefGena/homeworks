<?php
header('Content-Type: text/html; charset=utf-8');
if($_POST){
	include_once("config.inc.php");
	$sql = "SELECT * FROM users WHERE login = '{$_POST['login']}'"; 	//Проверяет есть ли такой юзер в базе
	$res = mysqli_query($link, $sql);
	$res = mysqli_fetch_assoc($res);
	if($res){
		echo "<h2>Такой юзер уже есть</h2>";
	}else{
		$a = strip_tags($_POST['login']);
		$b = md5(strip_tags($_POST['password'] . "hello world")); 			//SALT
		$sql = "INSERT INTO users SET
				login = '{$a}',
				password = '{$b}'";
				$res = mysqli_query($link, $sql);
				session_start();
				$_SESSION['user'] = "logged";
				header("Location: /sql/login.php");
	}
}
?>
<form action = "" method = "POST">
	Login
	<input type = "text" name = "login"><br>
	Password
	<input type = "text" name = "password"><br>
	<input type = "submit">
</form>