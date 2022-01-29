<?php

if($_SESSION['login_user']=='admin')
{
	header("location:admin.php");
	exit;
}

?>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Vaccine Booking</title>
</head>
<body>

	<h1 align="center">Vaccine Booking</h1>
	<h3 align="center">Book your slots</h3>
	<div align="right">
		<button onclick="document.location='logout.php'">Logout</button></div>
		<form action="booking_db.php" method="post">
		
			<center><h4>Enter your name: </p>&nbsp;&nbsp;&nbsp;
				<input type="text" name="name" size="50" maxlength="25">
				<br></h4><br>
				<h4><p>Enter your age: </p>&nbsp;&nbsp;&nbsp;
					<input type="text" name="age" size="50" maxlength="25"></h4>
				<br><br>
				<h4><p>Enter your DOB: </p>&nbsp;&nbsp;&nbsp;
				<input type="date" name="date" ></h4>
				<br>
				<form><p>Sex: </p>    
					<input type="radio" name="sex" value="male">Male
					<input type="radio" name="sex" value="female">Female
					<input type="radio" name="sex" value="transgender">Transgender
					<input type="radio" name="sex" value="others">Others
				<br><br><br>
				</form>
				<form><p>Vaccine required: </p>&nbsp;
					<input type="checkbox" name="vaccine" value="Covishield">Covishield
					<input type="checkbox" name="vaccine" value="Covaxin">Covaxin
					<input type="checkbox" name="vaccine" value="Sputnik">Sputnik
		
				<br><br></form>
				<form><p>dose: </p>&nbsp;
					<input type="checkbox" name="dose" value="first">1st Dose
					<input type="checkbox" name="dose" value="second">2nd Dose
			
				<br><br></form>
		
				<form action="upload.php" method="post" enctype="multipart/form-data">
					<p>Upload your Adhaar card here: &nbsp;
						<input type="file" name="file"><br>
						<strong>Note: Only .jpg,.png, .jpeg files under file size 5MB must be uploaded</strong>		</p>
				</form>
			
				<form><p>Select State: </p>
					<select name="state" size="1">
						<option value="Kerala"> Kerala</option>
						<option value="Tamil Nadu">Tamil Nadu</option>
						<option value="Karnataka">Karnataka</option>
						<option value="Andhra Pradesh">Andhra pradesh</option>
					</select>
				<br></form>
				<form><p>Select District: </p>
					<select name="district" size="1">
						<option value="Malappuram">Malappuram</option>
						<option value="Kozhikkode">Kozhikode</option>
						<option value="Trivandrum">Trivandrum</option>
						<option value="Ernamkulam">Ernamkulam</option>
					</select>
			
		

					<br></form>
			
				<form action="dist.php" method="post">
    				<input type="submit" value="Search for vaccination centers" name="submit">
    			</form>
    			<br>
    			<input type="reset" value="Reset" name="reset">
    	
    			</center>
    	</form>
	
</body>
</html>

