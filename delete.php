<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM vac_center WHERE id=$id"; 
$result = mysqli_query($link,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>
