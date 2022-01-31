<?php
require('db.php');

$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $name_of_center =$_REQUEST['name_of_center'];
    $slot = $_REQUEST['slot'];
    $user = $_SESSION["login_user"];
    $ins_query="insert into vac_center
    (name_of_center,slot,user)values
    ('$name_of_center','$slot','$user')";
    mysqli_query($link,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="view.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name_of_center" placeholder="Enter name of center" required /></p>
<p><input type="text" name="slot" placeholder="Enter slots" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
