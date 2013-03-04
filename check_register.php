<?php 		
	session_start();
	ob_start();	

	include 'includes/head.inc';
	include 'db_connect.php';		
	
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$pword = $_POST['pword'];
	$rpword = $_POST['rpword'];

	//check that username doesn't already exsist	
	$result = mysql_query("SELECT * FROM users WHERE uname='$uname' ");
	$count = mysql_num_rows($result);
	
	//if user deosn't exsist, check that passwords match
	if($count!=1 && $pword == $rpword)
	{
		//encrypt password and insert user data into database		
		$encrypt_pword = md5($pword);
		mysql_query("INSERT INTO users VALUES('','$uname','$encrypt_pword','$email', '0')");
		
		//send activation email to user
		$to = $email;
		$subject = "Your account activation";
		$message = "Hello ".$uname."! Click on the following to activate your account. bryanmoore.me/izettle/activate_account.php?user=".$uname;
		$from = "bryan@bryanmoore.me";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
		echo "<body><div class=\"content\">";		
		echo "A confirmation has been sent to your email to activate your account.<br>";
		echo "<br><button onclick=\"window.location.href='index.php'\">Go back</button>";
		echo "</div></body>";
		//header("Location:login_success.php");
	}
	else
	{		
		echo "<body><div class=\"content\">";		
		echo "unavailable username or mismatched passwords<br>";
		echo "<br><button onclick=\"window.location.href='register.php'\">Go back</button>";
		echo "</div></body>";
	}
?>
