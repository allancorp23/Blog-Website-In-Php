<?php
	session_start();
	unset($_SESSION['admin_username']);
	header("location:./index.php");
?>