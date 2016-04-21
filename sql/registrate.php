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



<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration</title>

    <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container" >
	

      <form class="form-signin" action = "" method = "POST">
        <h2 class="form-signin-heading">Регистрация</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name = "login" id="inputEmail" class="form-control" placeholder="Логин" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="text" name = "password" id="inputPassword" class="form-control" placeholder="Пароль" required>

        <button class="btn btn-lg btn-primary btn-block"  type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>