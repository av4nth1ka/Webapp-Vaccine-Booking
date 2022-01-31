<?php
session_start();
$host = "localhost"; 
$user = "avanthika";
$password="Abcd_1234";
$dbname="register";

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($username != "" && $password != ""){

        $sql_query = "select * from admin where username='".$username."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        
        if(mysqli_num_rows($result)==1){

          $_SESSION['username'] = $username;
          header('Location: dashboard.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
