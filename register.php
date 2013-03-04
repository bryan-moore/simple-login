<html>
	<?php include 'includes/head.inc'; ?>
	<body>
		<div class="content">		
		<form action="check_register.php" method="post">
			<table>	
				<tr>
					<td>Username
					</td>
					<td><input type="text" name="uname" />
					</td>
				</tr>
				<tr>
					<td>Password
					</td>
					<td><input type="password" name="pword" />
					</td>
				</tr>
				<tr>
					<td>Repeat Password
					</td>
					<td><input type="password" name="rpword" />
					</td>
				</tr>
				<tr>
					<td>Email
					</td>
					<td><input type="text" name="email" />
					</td>
				</tr>
				<tr>
					<td><input type="submit" value="Register" />
					</td>
				</tr>
			</table>
		</form>
		<button onclick="window.location.href='index.php'">Go Back</button>
		</div>
	</body>
</html>


