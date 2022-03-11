<?php
session_start();
$db=mysqli_connect('localhost','avanthika','Abcd_1234','register');
//REGISTER USER

if(isset($_POST['reg_user']))
{
	//Getting Post Values
	$username=$_POST['username'];	
	$mobileno=$_POST['mobileno'];	
	$password=$_POST['password'];	
	//Checking mobile number id exist for not
	$result ="SELECT count(*) FROM user WHERE mobileno=?";
	$stmt = $db->prepare($result);
	$stmt->bind_param('i',$mobileno);
	$stmt->execute();
	$stmt->bind_result($count);
	$stmt->fetch();
	$stmt->close();
	//if mobileno already exist
	if($count>0)
	{
		echo "<script>alert('mobile number already associated with another account. Please try with diffrent number.');</script>";
	} 
	// If mobile number not exist
	else 
	{
		$sql="INSERT into user(username,mobileno,password)VALUES(?,?,?)";
		$stmti = $db->prepare($sql);
		$stmti->bind_param('sis',$username,$mobileno,$password);
		$stmti->execute();
		$stmti->close();
        $_SESSION['username']=$username;    //implementing sessions
		$_SESSION['success']="You are now logged in";
		header('location:contents.php');
	}
	
}


//login user
if(isset($_POST['login_user']))
{
	//Getting Post Values
	$mobileno=$_POST['mobileno'];	
	$password=$_POST['password'];	
	$stmt = $db->prepare( "SELECT * FROM user WHERE mobileno='$mobileno' AND password='$password' ");
	$stmt->bind_param('is',$mobileno,$password);
    $stmt->execute();
    $stmt->bind_result($mobileno,$id);
    $rs= $stmt->fetch ();
    $stmt->close();
    if (!$rs) 
    {
  		echo "<script>alert('Invalid Details. Please try again.')</script>";
    } 
    else 
    {
    	$_SESSION['mobileno']=$mobileno;
		$_SESSION['success']="You are now logged in";
     	header('location:contents.php');
    }
}
 
?>
