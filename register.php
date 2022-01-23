<?php include('config.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action="register.php">
		
		<div class="input-group">
			<label>Name:</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Mobile Number:</label>
			<input type="number" name="mobileno" value="<?php echo $mobileno; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password"value="<?php echo $password;?>">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already have an account? <a href="login.php">Login</a>
		</p>
	</form>

</body>
</html>
