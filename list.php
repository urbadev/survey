<?php

// Includs database connection
include "db_connect.php";

// Makes query with rowid
$query = "SELECT rowid, * FROM students";

// Run the query and set query result in $result
// Here $db comes from "db_connection.php"
$result = $db->query($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data List</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">
		<a href="insert.php">Add New</a>
		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<tr>
				<td>Name</td>
				<td>Sector</td>
				<td>Profesión</td>
				<td>Marmol</td>
				<td>Cemento</td>
				<td>Piedra</td>
				<td>Madera</td>
				<td>Metalico</td>
				<td>Monocolor</td>
				<td>Acción</td>
			</tr>
			<?php while($row = $result->fetchArray()) {?>
			<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['sector'];?></td>
				<td><?php echo $row['profesion'];?></td>
				<td><?php echo $row['marmol'];?></td>
				<td><?php echo $row['cemento'];?></td>
				<td><?php echo $row['piedra'];?></td>
				<td><?php echo $row['madera'];?></td>
				<td><?php echo $row['metalico'];?></td>
				<td><?php echo $row['monocolor'];?></td>
				<td>
					<a href="update.php?id=<?php echo $row['rowid'];?>">Edit</a> | 
					<a href="delete.php?id=<?php echo $row['rowid'];?>" onclick="return confirm('Are you sure?');">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>