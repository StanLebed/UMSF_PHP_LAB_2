<html>
<head>
	<meta charset="UTF-8">
	<title>CLIENT</title>
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<h1>Кабинет клиента</h1>
	<a href="../index.php"><button class=" button go_back">Назад</button></a><br>
	<form name = "switch_cabinet" action = "admin.php" method = "post">
		<button class="switch_cabinet_btn d_none">Admin</button>
	</form>
	<form name = "switch_cabinet" action = "manager.php" method = "post">
		<button class="switch_cabinet_btn l200 d_none">Manager</button>
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

require "../change_language.php";
?>
