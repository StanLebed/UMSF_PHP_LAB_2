<html>
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
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>CLIENT</title>
	<link rel="stylesheet" type="text/css" href="../css/styl.css">
</head>
<body>
	<div class="select_language">
	<form method="POST">
		<select name="lang" class="select_language_option">
			<option value="en">English</option>
			<option value="ru">Русский</option>
			<option value="ua">Українська</option>
			<option value="it">Italiano</option>
		</select>
		<input class="lang_btn" type="submit" name = "select_lang" value="Select">
	</form>
	</div>
	<form method="POST">
		<a href="../logout.php"><input class = "go_back" type="submit" name="exit" value="Выйти"></a>
	</form>
</body>
</html>  