<?php include('booking_db.php') ?>
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
		<form action="contents.php" method="post">
		
			<center><h4>Enter your name: </p>&nbsp;&nbsp;&nbsp;
				<input type="text" name="name" size="50" maxlength="25">
				<br></h4><br>
				<h4><p>Enter your age: </p>&nbsp;&nbsp;&nbsp;
					<input type="text" name="age" size="50" maxlength="25"></h4>
				<br><br>
				<h4><p>Enter your DOB: </p>&nbsp;&nbsp;&nbsp;
				<input type="text" name="dob" placeholder="yyyy-mm-dd"></h4>
				<br><br>
				<p>Sex:</p>
				<input type="text" name="sex" size="50" maxlength="20">
				<br><br> 
				
				<p>Vaccine required: </p>&nbsp;
					<input type="text" name="vaccine" size="50" maxlength="25">
		
				<br><br>
				<p>dose: </p>&nbsp;
					<input type="text" name="dose" >
			
				<br><br>
				
			
				<p>State: </p>
					<input type="text" name="state" >
				<br><br>
				<p>District: </p>
					<input type="text" name="district">
		

					<br><br>
			
				<form action="tables.php" method="post">
    				<input type="submit" value="continue" name="submit">
    			</form>
    			<br>
    			<input type="reset" value="Reset" name="reset">
    	
    			</center>
    	</form>
	
</body>
</html>

