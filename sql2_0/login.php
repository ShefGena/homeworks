<?php
header('Content-Type: text/html; charset=utf-8');
if($_POST){
	include_once("config.inc.php");
	$pas = md5($_POST['password'] . "hello world");
	$sql = "SELECT * FROM users WHERE login = '{$_POST['login']}' AND password = '{$pas}'"; 	//Проверяет есть ли такой юзер в базе
	$sqladmin = "SELECT * FROM users WHERE login = '{$_POST['login']}' AND password = '{$pas}' AND role = 1"; 	//Проверяет есть ли такой юзер в базе
	$res = mysqli_query($link, $sql);
	$resadmin = mysqli_query($link, $sqladmin);
	$res = mysqli_fetch_assoc($res);
	$resadmin = mysqli_fetch_assoc($resadmin);
	if($resadmin){
		session_start();
		$_SESSION['user'] = "logged";
		header("Location: /sql/index.php");
	}elseif($res){
		session_start();
		$_SESSION['user'] = "logged";
		header("Location: /sql/show.php");
	}else{
		echo "<h2>Логин или пароль введен неправильно!</h2>";
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