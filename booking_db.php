<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$age=$_POST['age'];
	$dob=$_POST['dob'];
	$sex=$_POST['sex'];
	$vaccine=$_POST['vaccine'];
	$dose=$_POST['dose'];
	$state=$_POST['state'];
	$district=$_POST['district'];
	

	$hostname="localhost";
	$username="avanthika";
	$password="Abcd_1234";
	$db="booking";

	$dbconnect=mysqli_connect($hostname,$username,$password,$db);
	if (!$dbconnect)
	{
		die("Database connection failed: ",mysqli_connect_error());
	}


	$query="INSERT INTO users_booked(name,age,dob,sex,vaccine,dose,state,dist) VALUES('$name','$age','$dob','$sex','$vaccine','$dose','$state','$dist')";
	if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Booking not Successful');
    } else {
      echo "The Vaccine has been booked successfully";
    }

    mysqli_close($dbconnect);

}
?>
