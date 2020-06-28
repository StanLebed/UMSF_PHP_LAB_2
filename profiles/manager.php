<html>
<head>
	<meta charset="UTF-8">
	<title>MANAGER</title>
</head>
<body>
	<h1>Кабинет менеджера</h1>
</body>
</html>

<?php 
session_start();
require "../classes.php";
require "../logout.php";

if(empty($_SESSION['name']))
{
	header("Location: ../index.php");
}

if(!empty($_POST["select_lang"]))
{
	$_SESSION['lang'] = $_POST['lang'];
}

if ($_SESSION['role']=='client')
{
	header ("Location: ../ERROR_403.php");
}

$lang = $_SESSION['lang'];
$manager = new manager($_SESSION['name'], $_SESSION['surname'], $_SESSION['role'], $_SESSION['lang']);

require "../change_language.php";
?>
