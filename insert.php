<?php
require('db.php');

$name_of_center=$_GET['name_of_center'];
$slot=$_GET['slot'];
$sql="INSERT INTO vax_centers(name_of_center,slot) VALUES('$name_of_center','$slot')";
if(mysqli_query($link,$sql)){
    echo "new recrd has been added succesfully!";
}
else
{
    echo "Error:". $sql.":-".mysqli_error($link);
}
mysqli_close($link);
?>
