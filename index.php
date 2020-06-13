<?php 
session_start();

if(!empty($_SESSION['name']))
{
	header("Location: profiles/".strtolower($_SESSION['role']).".php");
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Какой-то непонятный сайт</title>
	<link rel="stylesheet" type="text/css" href="css/styl.css">
</head>
<body>
	<div class="wrapper">
		<h1>Какой-то непонятный сайт</h1>
		<div class="loginForm">
			<form action="login.php" method="POST">
				<p class="loginForm_text">Введите логин и пароль пользователя</p>
				<p>ЛОГИН</p>
				<input class="loginForm_inp" name="login"  type = 'text'> <br>
				<p>ПАРОЛЬ</p>
				<input class="loginForm_inp" name="password"  type = 'password'> <br>
				<input type='submit' name="submit" value="LOGIN" class="loginForm_btn">
			</form>
				<?php
				if (!empty($_SESSION['message']))
				{
					echo '<p class="msg">' .$_SESSION['message']. '</p>';
					unset($_SESSION['message']);
				}
				?>
		</div>
	</div>
</body>
</html>