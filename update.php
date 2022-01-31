<?php 
include_once 'db.php';
$id=$_GET['id'];
$slot=$_GET['slot'];
$sql="UPDATE vax_centers SET slot='$slot' WHERE id='$id'";


$query=mysqli_query($link,$sql);
if(!$query)
{
	echo "Update unsuccessful". mysqli_error($link);die;

}
else
{
	echo "Data successfully updated";
}
?>
