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
	<form method="post" action="cookies.php">
		
		<div class="input-group">
			<label>Mobile Number</label>
			<input type="number" name="mobileno" value="<?php if(isset($_COOKIE["mobileno"])) { echo $_COOKIE["mobileno"]; } ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
		</div>
		<div class="input-group">
			<p>
				<input type="checkbox" name="remember" /> Remember me
			</p>
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet registered?<a href="register.php">Register</a>
		</p>
	</form>

</body>
</html>
