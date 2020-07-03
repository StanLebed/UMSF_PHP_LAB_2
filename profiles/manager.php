<html>
<head>
	<meta charset="UTF-8">
	<title>MANAGER</title>
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<h1>Кабинет менеджера</h1>
	<a href="../index.php"><button class=" button go_back">Назад</button></a><br>
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

if(!empty($_POST["select_lang"]))
{
	$_SESSION['lang'] = $_POST['lang'];
}

if ($_SESSION['role']=='client')
{
	header ("Location: ../ERROR_403.php");
}

require "../change_language.php";
?>
