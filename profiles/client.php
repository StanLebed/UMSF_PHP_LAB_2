<html>
	<head>
	<meta charset="UTF-8">
	<title>CLIENT</title>
</head>
	<body>
			<h1>Кабинет клиента</h1>
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

$lang = $_SESSION['lang'];
$client = new client($_SESSION['name'], $_SESSION['surname'], $_SESSION['role'], $_SESSION['lang']);

if(!empty($lang))
{
	if($lang == 'en')
	{
		$client->hello();
	}
	if($lang == 'ru')
	{
		$client->privet();
	}
	if($lang == 'ua')
	{
		$client->vitaiu();
	}
	if($lang == 'it')
	{
		$client->salve();
	}
}
else
{
	echo "Choose the language";
}
require "../change_language.html"
?>
