<html>
	<?php include 'includes/head.inc'; ?>
	<body>
		<div class="content">		
		<form action="check_login.php" method="post">
			<table>	
				<tr>
					<td>Username
					</td>
					<td><input type="text" name="username" />
					</td>
				</tr>
				<tr>
					<td>Password
					</td>
					<td><input type="password" name="password" />
					</td>
				</tr>
				<tr>
					<td><input type="submit" value="Login" />
					</td>
				</tr>
			</table>
		</form>
		Not a member?&nbsp;&nbsp;&nbsp;<button onclick="window.location.href='register.php'">Create an account!</button>
		</div>
	</body>
</html>


