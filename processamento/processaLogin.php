<?php
	if($_POST["login"] == "paulogomes.tec@gmail.com" && $_POST["senha"] == "paulo")
		header("Location: ../index.php");
	else
		header("Location: ../login.php");
?>