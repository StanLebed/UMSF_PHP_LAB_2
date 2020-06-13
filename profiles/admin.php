<html>
<body>
	<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
</head>
	<h1>Кабинет администратора</h1>
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

if ($_SESSION['role']!='admin')
{
	header ("Location: ../ERROR_403.php");
}

if(!empty($_POST["select_lang"]))
{
	$_SESSION['lang'] = $_POST['lang'];
}

$lang = $_SESSION['lang'];
$admin = new admin ($_SESSION['name'], $_SESSION['surname'], $_SESSION['role'], $_SESSION['lang']);

if(!empty($lang))
{
	if($lang == 'en')
	{
		$admin->hello();
	}
	if($lang == 'ru')
	{
		$admin->privet();
	}
	if($lang == 'ua')
	{
		$admin->vitaiu();
	}
	if($lang == 'it')
	{
		$admin->salve();
	}
}
else
{
	echo "Choose the language";
}
require "../change_language.html"
?>
