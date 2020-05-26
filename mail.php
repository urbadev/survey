<?php
$message = ""; // initial message 
if( isset($_POST['submit_data']) ){

	// Includs database connection
	include "db_connect.php";

	// Gets the data from post sector
	$name = $_POST['name'];
	$sector = $_POST['sector'];
	$profesion = $_POST['profesion'];
	$marmol = $_POST['marmol'];
	$cemento = $_POST['cemento'];
	$piedra = $_POST['piedra'];
	$madera = $_POST['madera'];
	$metalico = $_POST['metalico'];
	$monocolor = $_POST['monocolor'];

	// Makes query with post data
	$query = "INSERT INTO students (name, sector, profesion, marmol, cemento, piedra, madera, metalico, monocolor) VALUES ('$name', '$sector', '$profesion', '$marmol', '$cemento', '$piedra', '$madera', '$metalico', '$monocolor')";
	
	// Executes the query
	// If data inserted then set success message otherwise set error message
	// Here $db comes from "db_connection.php"
	if( $db->exec($query) ){
		$message = "Data is inserted successfully.";
	}else{
		$message = "Sorry, Data is not inserted.";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="theme.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500&display=swap" rel="stylesheet">

<style>
body {font-family: 'Montserrat', sans-serif;}
#loading-img{
display:none;
}

.response_msg{
margin-top:10px;
font-size:13px;
background:#E5D669;
color:#ffffff;
width:250px;
padding:3px;
display:none;
}


</style>


      
<body> 

	<div action="index.php" class="container">
		<h2 class="font-weight-bold text-center mb-4 mt-5">Hola Vicent!</h2>
		<p class="font-size-lg text-center text-muted mb-5">Sé que tienes mucho que hacer, por lo que seré breve. Los comentarios de los clientes marcan la diferencia. Nuestra breve encuesta te proporciona un enlace directo a nuestro equipo de gestión y usaremos tus respuestas para las planificaciones y desarrollos futuros en XTONE.</p>
			<div class="col-12 text-center">
				
				<div class="col-12   text-center text-center">
				<a href="#" class="btn btn-block btn-success lift" name="submit_data" type="submit" value="Enviar encuesta">Participar en esta breve encuesta</a>
				</div>
				<p class="font-size-lg text-center text-muted mt-5">Estamos listos para escucharte,</p>
				<p class="text-center text-muted"><small>P.D. Descubre cómo tus comentarios nos ayudan a mejorar nuestros productos, servicios y experiencias con el fin de ofrecer las herramientas necesarias y guiar a emprendedores de todo el mundo.</small></p> 
			
			</div>
			<div class="col">
				<img style="width: 100px;" class=" mx-auto d-block" src="logo.jpg"> 

			

			<a href="#"><p class="text-center text-muted "><small>Terminos legales</small></p></a> 
			
				
			</div>
	</div>

</body>