<?php
$link=mysqli_connect('localhost','avanthika','Abcd_1234','booking');
if($link === false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
echo "<center>";
echo "<i><b><u><h1>Welcome Admin!</h1></u></b></i>";
echo "<h1>Vaccination centers</h1>";
$sql="SELECT * FROM vax_centers";
if($result=mysqli_query($link,$sql)){
	if(mysqli_num_rows($result)>0)
	{
		echo "<table>";
			echo "<tr>";
				echo "<th>id</th>";
				echo "<th>name_of_center</th>";
				echo "<th>slots</th>";
				echo "<th>action</th>";
			echo "</tr>";
		while($row=mysqli_fetch_array($result)){
			echo "<tr>";
				echo "<td>". $row['id']. "</td>";
				echo "<td>". $row['name_of_center'] ."</td>";
				echo "<td>". $row['slot']. "</td>";
				echo "<td>". $row['action']. "<a href='update.php'>Update</a>&nbsp<a href=''>Delete</a></td>";
			echo "</tr>";

		}
		echo "</table>";
		
		mysqli_free_result($result);
	}else {
		echo "No records matching for your query found";
	}
}else{
	echo "error:couldnot able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
echo "</center>";
?>
