<?php 
	session_start();	
	ob_start();

	include 'includes/head.inc';
	include 'db_connect.php';	
	
	$myuname = $_POST['username'];
	$mypword = $_POST['password'];
	
	//encrypt password	
	$encrypt_mypword = md5($mypword);
	
	//check user exists with coresponding password	
	$result = mysql_query("SELECT * FROM users WHERE uname='$myuname' AND pword='$encrypt_mypword' AND active='1' ");
	$count = mysql_num_rows($result);
	
	if($count==1 && $myuname!=null){
		//set session variables and go to success page		
		$_SESSION['uname'] = $myuname;
		$_SESSION['pword'] = $mypword;
		header("Location:login_success.php");
	}
	else {
		//wrong input redirect back to index		
		echo "<body><div class=\"content\">";		
		echo "Wrong Username or Password<br>";
		echo "<br><button onclick=\"window.location.href='index.php'\">Go back</button>";
		echo "</div></body>";
		mysql_close($con);
	}
?>
