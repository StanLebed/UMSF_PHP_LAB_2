<?php 
$lang = $_SESSION['lang'];
$role = $_SESSION['role'];
if(!empty($lang))
{
	switch($lang) 
	{
		case 'en':	${strtolower($role)}->hello();	break;
		case 'ru':	${strtolower($role)}->privet();	break;
		case 'ua':	${strtolower($role)}->vitaiu();	break;
		case 'it':	${strtolower($role)}->salve();	break;
	}
}
else
{
	echo "Choose the language";
}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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