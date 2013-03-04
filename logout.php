<?php
	session_start();
	unset($_SESSION['uname']);
	unset($_SESSION['pword']);
	session_destroy();
	header("Location: index.php");
?>

