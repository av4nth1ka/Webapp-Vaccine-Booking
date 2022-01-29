<?php
$dbconnect=mysqli_connect('localhost','avanthika','Abcd_1234','booking');

$name=$_POST['name'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$sex=$_POST['sex'];
$vaccine=$_POST['vaccine'];
$dose=$_POST['dose'];
$state=$_POST['state'];
$district=$_POST['district'];
	
if (!$dbconnect)
{
	die("Database connection failed: ",mysqli_connect_error());
}


$query="INSERT INTO users_booked(name, age, dob, sex, vaccine, dose, state, district) VALUES('$name','$age','$dob','$sex','$vaccine','$dose','$state','$district')";
if (!mysqli_query($dbconnect, $query))
	{
    die('An error occurred. Booking not Successful');
	} 
  else 
  {
    echo "The Vaccine has been booked successfully";
  }

    mysqli_close($dbconnect);

}
?>
