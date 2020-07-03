<html>
<body>
	<head>
		<meta charset="UTF-8">
		<title>ADMIN</title>
		<link rel="stylesheet" href="/css/style.css">
	</head>
	<h1>Кабинет администратора</h1>
	<form name = "switch_cabinet" action = "manager.php" method = "post">
		<button class="button switch_cabinet_btn">Manager</button>
	</form>
	<form name = "switch_cabinet" action = "client.php" method = "post">
		<button class="button switch_cabinet_btn l200">Client</button>
	</form>
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

require "../change_language.php";
?>
