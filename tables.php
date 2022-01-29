<?php
include_once('connect_tables.php');
$query="select * from vax_centers";
$result=mysqli_query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Retrieve tables</title>
</head>
<body>
	<table align="center" border="1px" style="width:600px line-height:40px;">
		<tr>
			<th colspan="4"><h2>Vaccination Centers</h2></th>
		</tr>
		<t>
			<th>ID </th>
			<th>Name of center</th>
			<th>Available Slots</th>
			<th>Action</th>
		</t>
		<?php
			while($rows=mysqli_fetch_assoc($result))
				{
		?>        
		         	<tr>
		         		<td><?php echo $rows['id']; ?></td>
		         		<td><?php echo $rows['name_of_center']; ?></td>
		         		<td><?php echo $rows['slots']; ?></td>
		         		<td><?php echo $rows['action']; ?></td>
		         	</tr>
		<?php 
				}
		?>
	</table>
</body>
</html>
