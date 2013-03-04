<?php
	session_start();
	include 'includes/head.inc';
	include 'db_connect.php';

	if(isset($_SESSION['uname']))
	{
		//create timestamp on successful login
		$date = new DateTime();
		$temp = $date->format('Y-m-d H:i:s');
		//insert timestamp for corresponding user into database
		mysql_query("INSERT INTO timestamps VALUES('','$_SESSION[uname]','$temp')");
		
		echo "<body><div class=\"content\"><table>";	
		echo "<tr><td>Welcome ".$_SESSION['uname']."</td></tr>";
	
		//query 5 most recent sucessful logins		
		$result = mysql_query("SELECT * FROM timestamps WHERE uname='$_SESSION[uname]' ORDER BY id desc LIMIT 5");
		$i = 0;		
		while($row = mysql_fetch_array($result))
		  {
				$i++;			  
				echo "<tr class=\"d".($i & 1)."\"><td>".$row['tstamp']."</td></tr>";
		  }
				
		echo "<tr><td><button onclick=\"window.location.href='logout.php'\">Logout</button></td></tr>";
		echo "</table></div></body>";
	}
	else {		
		header("Location:index.php");	
	}	

	mysql_close($con);
	ob_end_flush();
?>

