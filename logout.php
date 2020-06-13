<?php 
if(!empty($_POST["exit"]))
{ 
	session_destroy();
	header("Location: ../index.php");
}
?>
