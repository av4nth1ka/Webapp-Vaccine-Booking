<!DOCTYPE html>
<html>
<head>
  <title>File uploads</title>
</head>
<body>
  <form enctype="multipart/form-data" action="upload.php" method="POST">
    <center><h1>Upload your Adhaar card here</h1>
    <input type="file" name="file"></input><br />
    <input type="submit" value="Upload" name="upload"></input>
  </form>
</center>
</body>
</html>
<?PHP
  if(isset($_POST['upload']))
  {
    $path = "/var/www/abcd1234/webapp/images/" . basename( $_FILES['file']['name']);
    

    if(move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['file']['name']). 
      " has been uploaded";
      header('location:tables.php');
    } else{
        echo "There was an error uploading the file, please try again!";
    }

  }
?>

