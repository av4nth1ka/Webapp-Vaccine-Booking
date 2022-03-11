<?php

$dbconnect=mysqli_connect('localhost','avanthika','Abcd_1234','booking');

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

}

$query="INSERT INTO `users_booked`(`name`,`age`,`dob`,`sex`,`vaccine`,`dose`,`state`,`district`) VALUES('$name','$age','$dob','$sex','$vaccine','$dose','$state','$district')";
$rs=mysqli_query($dbconnect,$query);
if($rs)
{
  echo "Record entered successfully";
  header('location:upload.php');
}


?>

