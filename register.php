<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Register</title>
</head>
<body>
<main><center>
    <form action="register.php" method="post">
        <h1>Sign Up</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div><br><br>
        <div>
            <label for="mobileno">Mobile Number:</label>
            <input type="mobileno" name="mobileno" id="mobileno">
        </div><br><br>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div><br><br>
        
        <button type="submit" name="reg_user">Register</button>
        <footer>Already a member? <a href="login.php">Login here</a></footer>
    </form>
</center>
</main>
</body>
</html>
