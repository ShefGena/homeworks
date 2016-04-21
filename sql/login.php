<?php
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


<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container" >
	

      <form class="form-signin" action = "" method = "POST">
        <h2 class="form-signin-heading">Приветствуем Вас!</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name = "login" id="inputEmail" class="form-control" placeholder="Введите логин" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="text" name = "password" id="inputPassword" class="form-control" placeholder="Введите Пароль" required>

        <button class="btn btn-lg btn-primary btn-block"  type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>









