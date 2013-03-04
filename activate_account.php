<?php
	include 'includes/head.inc';	
	include 'db_connect.php';

	$user_to_act = $_GET['user'];

	mysql_query("UPDATE users SET active=1 WHERE uname='$user_to_act' ");

	echo "<body><div class=\"content\">";		
	echo "Your account is now active, please log in.<br>";
	echo "<br><button onclick=\"window.location.href='index.php'\">Go back</button>";
	echo "</div></body>";
?>
