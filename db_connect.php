<?php
	$con = mysql_connect("HOST","DB","PASSWORD");
	if (!$con)
  		{
  			die('Could not connect: ' . mysql_error());
  		}
	mysql_select_db("DB", $con);
?>	
