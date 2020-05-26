<?php
$message = ""; // initial message 

// Includs database connection
include "db_connect.php";

// Updating the table row with submited data according to rowid once form is submited 
if( isset($_POST['submit_data']) ){

	// Gets the data from post
	$id = $_POST['id'];
	$name = $_POST['name'];
	$sector = $_POST['sector'];
	$marmol = $_POST['marmol'];
	$cemnto = $_POST['cemento'];
	$piedra = $_POST['piedra'];
	$madera = $_POST['madera'];
	$metalico = $_POST['metalico'];

	$monocolor = $_POST['monocolor'];

	// Makes query with post data
	$query = "UPDATE students set name='$name', sector='$sector', marmol='$marmol', cemento='$cemento', piedra='$piedra', madera='$madera', metalico='$metalico', monocolor='$monocolor' WHERE rowid=$id";
	
	// Executes the query
	// If data inserted then set success message otherwise set error message
	// Here $db comes from "db_connection.php"
	if( $db->exec($query) ){
		$message = "Data is updated successfully.";
	}else{
		$message = "Sorry, Data is not updated.";
	}
}

$id = $_GET['id']; // rowid from url
// Prepar the query to get the row data with rowid
$query = "SELECT rowid, * FROM students WHERE rowid=$id";
$result = $db->query($query);
$data = $result->fetchArray(); // set the row in $data
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">

		<!-- showing the message here-->
		<div><?php echo $message;?></div>

		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<tr>
				<td>Name:</td>
				<td><input name="name" type="text" value="<?php echo $data['name'];?>"></td>
			</tr>
			<tr>
				<td>Sector:</td>
				<td><input name="sector" type="text" value="<?php echo $data['sector'];?>"></td>
			</tr>
			<tr>
				<td>Profesión:</td>
				<td><input name="profesion" type="text" value="<?php echo $data['profesion'];?>"></td>
			</tr>
			<tr>
				<td>Marmol:</td>
				<td><input name="marmol" type="text" value="<?php echo $data['marmol'];?>"></td>
			</tr>
			<tr>
				<td>Cemento:</td>
				<td><input name="cemento" type="text" value="<?php echo $data['cemento'];?>"></td>
			</tr>
			<tr>
				<td>Piedra:</td>
				<td><input name="piedra" type="text" value="<?php echo $data['piedra'];?>"></td>
			</tr>
			<tr>
				<td>Madera:</td>
				<td><input name="madera" type="text" value="<?php echo $data['madera'];?>"></td>
			</tr>
			<tr>
				<td>Metalico:</td>
				<td><input name="metalico" type="text" value="<?php echo $data['metalico'];?>"></td>
			</tr>

			
				<td>Monocolor:</td>
				<td><input name="monocolor" type="text" value="<?php echo $data['monocolor'];?>"></td>
			</tr>
			<tr>
				<td><a href="list.php">Back</a></td>
				<td><input name="submit_data" type="submit" value="Update Data"></td>
			</tr>
			</form>
		</table>
	</div>
</body>
</html>