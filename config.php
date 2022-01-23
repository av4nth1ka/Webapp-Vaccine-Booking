?php
session_start();
//initialised the variables
$username="";
$mobileno="";
$errors=array();

$db=mysqli_connect('localhost','avanthika','Abcd_1234','register');
//REGISTER USE
if(isset($_POST['reg_user']))
{
	//to receive values from the user
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$mobileno=mysqli_real_escape_string($db,$_POST['mobileno']);
	$password=mysqli_real_escape_string($db,$_POST['password']);

	//to ensure the form is correctly filled 
	//by using array_push()
	if(empty($username)) { array_push($errors, "Username is required");}
	if(empty($mobileno)) {array_push($errors, "Mobile number is required");}
	if(empty($password)) {array_push($errors, "Password is required");}

	//to ensure a user doesnt exist with the given credentials
	$user_check_query="SELECT * FROM user WHERE username='$username' OR mobileno='$mobileno' LIMIT 1";
	$result=mysqli_query($db,$user_check_query);
	$user=mysqli_fetch_assoc($result);

	if($user) { //if user already exists
		if($user['mobileno']==='$mobileno'){
			array_push($errors, "Mobile number already exists");

		}
	}

	//if there are no errors, register the user
	if(count($errors)==0){
		$password=md5($password); //encrypts the password b4 saving to database

		$query="INSERT INTO user(username,mobileno,password)VALUES('$username','$mobileno','$password')";
		mysqli_query($db, $query);
		$_SESSION['username']=$username;    //implementing sessions
		$_SESSION['success']="You are now logged in";
		header('location:contents.php');
	}
}

//Login user
if(isset($_POST['login_user'])) {
	$mobileno=mysqli_real_escape_string($db,$_POST['mobileno']);
	$password=mysqli_real_escape_string($db,$_POST['password']);

	if(empty($mobileno)) {
		array_push($errors,"Mobile Number is required");
	}
	if(empty($password)){
		array_push($errors,"Password is required");
	}
	if(count($errors)==0){
		$password=md5($password);
		$query="SELECT * FROM user WHERE mobileno='$mobileno' AND password='$password' ";
		$results=mysqli_query($db,$query);
		if(mysqli_num_rows($results)==1)
		{
			$_SESSION['mobileno']=$mobileno;
			$_SESSION['success']="You are now logged in";
			header('Location:contents.php');
		}else{
			array_push($errors,"Wrong mobile number or password");
		}

	}
}
?>
