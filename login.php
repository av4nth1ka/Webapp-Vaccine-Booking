<?php include('config.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	
</head>
<body>
	<center>
	<div class="header">
		<h1>Login</h1>
	</div>
	<form method="post" action="cookies.php">
		
		<div>
			<label>Mobile Number</label>
			<input type="number" name="mobileno" value="<?php if(isset($_COOKIE["mobileno"])) { echo $_COOKIE["mobileno"]; } ?>"> 
		</div><br><br>
		<div>
			<label>Password</label>
			<input type="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"> 
		</div><br><br>
		<div>
			<p>
				<input type="checkbox" name="remember" /> Remember me
			</p><br>
			<button type="submit" class="btn" name="login_user">Login</button>
		</div><br>
		<p>
			Not yet registered?<a href="register.php">Register</a>
		</p>
	</form>
</center>
</body>
</html>
