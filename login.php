<?php 
session_start();
require "database.php";
require "classes.php";

$LOGIN  = $_POST['login'];
$PASSWORD = $_POST['password'];
$SUBMIT = $_POST['submit'];
$CHECK = 0;

if (!empty($LOGIN) && !empty($PASSWORD)) {
	for ($i=0; $i<count($database); $i++)
	{
		if (($LOGIN == $database[$i]['login'] && $PASSWORD == $database[$i]['password']) )
		{
			$CHECK = 1;
			echo "NORM";
			$_SESSION['name'] = $database[$i]['name'];
			$_SESSION['surname'] = $database[$i]['surname'];
			$_SESSION['lang'] = $database[$i]['lang'];
			$_SESSION['role'] = $database[$i]['role'];
			header("Location: profiles/".strtolower($database[$i]["role"]).".php");
			break;
		}
	}
	if($CHECK == 0)
	{
		$_SESSION['message'] = "Чёт не припомню в своей базе данных таких типов. Ты зашёл не в тот райончик, дружок. (Если уверен в своих силах, попробуй проверить логин или пароль)";
		header('Location: index.php');
	}
}
else 
{
	$_SESSION['message'] = "ERROR! Разве так трудно заполнить все поля? Выйди и зайди нормально!";
		header('Location: index.php');
}
?>