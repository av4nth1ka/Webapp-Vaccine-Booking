<?php
require('db.php');

$id=$_REQUEST['id'];
$query = "SELECT * from vac_center where id='".$id."'"; 
$result = mysqli_query($link, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name_of_center =$_REQUEST['name_of_center'];
$slot=$_REQUEST['slot'];
$user = $_SESSION["user"];
$update="update vac_center set slot='".$slot."', 
name_of_center='".$name_of_center."' where id='".$id."'";
mysqli_query($link, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name_of_center" placeholder="Enter the name of center" 
required value="<?php echo $row['name_of_center'];?>" /></p>
<p><input type="text" name="slot" placeholder="Enter slot" 
required value="<?php echo $row['slot'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
