<?php include('config.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">
		
		<div class="input-group">
			<label>Mobile Number</label>
			<input type="number" name="mobileno">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet registered?<a href="register.php">Register</a>
		</p>
	</form>

</body>
</html>
