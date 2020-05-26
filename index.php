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

	<form action="index.php" class="container" name="contact-form" action="" method="post" id="contact-form">
			<div class="col-12   text-center p-7">
				<h2 class="font-weight-bold text-center mb-2">Hola 

					<input style="text-align: center;" type="text" name="name" readonly class="form-control-plaintext" id="staticEmail" type="text" value="<?php
					echo htmlspecialchars($_GET["nombre"]);
					?>" required>
				</h2>
				

				<p class="font-size-lg text-center mb-10">Contesta las siguientes preguntas:</p>


				<div class="form-label-group mb-10" style="width: 300px;margin: 0 auto;">
					<input   type="text" class="text-center form-control form-control-flush" id="cardName" placeholder="Sector" name="sector">
					<label  for="cardName">¿A que sector perteneces?</label>
				</div>
				<p class="text-center text-muted mb-5">¿Que tipo de profesional eres?</p>
				<select style="width: 300px;color: #869ab7;" class="custom-select text-center mb-10" name="profesion">
				  <option value="No" selected > Selecciona una opción</option>
				  <option value="Diseñador">Diseñador</option>
				  <option value="Arquitecto">Arquitecto</option>
				  <option value="Promotor">Promotor</option>
				</select>

			</div>
			<p class="text-center text-muted mb-5">¿Que productos te gustan más?</p>
			<div class="row">

				

			 <div class="col-12 col-xl-6 d-flex p-3">
			    
				<!-- Card -->
				<div class="card mb-6 mb-xl-0 shadow-light-lg">

					<!-- Image -->
					<a class="card-img-top" href="#!" target="_blank">
						<img src="https://www.xtone-surface.com/src/img/graphics/sl-calacatta-green-4.jpg" alt="..." class="img-fluid">
					</a>

					<!-- Shape -->
					<div class="position-relative">
						<div class="shape shape-fluid-x shape-bottom text-white">
						   <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
						</div>
					</div>

					<div class="col-12   text-center p-4">
						<input  type="checkbox" value="Si" name="marmol">
						<label  for="defaultCheck1">
						Marmoles
						</label>
					</div >

			    </div>

			  </div>

			   <div class="col-12 col-xl-6 d-flex p-3">
			    
				<!-- Card -->
				<div class="card mb-6 mb-xl-0 shadow-light-lg">

					<!-- Image -->
					<a class="card-img-top" href="#!" target="_blank">
						<img src="https://www.xtone-surface.com/src/img/graphics/sl-bottega-acero-3.jpg" alt="..." class="img-fluid">
					</a>

					<!-- Shape -->
					<div class="position-relative">
						<div class="shape shape-fluid-x shape-bottom text-white">
						   <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
						</div>
					</div>

					<div class="col-12   text-center p-4">
						<input  type="checkbox" value="Si" name="cemento">
						<label  for="defaultCheck1">
						Cemento
						</label>
					</div>

			    </div>

			  </div>
			   <div class="col-12 col-xl-6 d-flex p-3">
			    
					<!-- Card -->
					<div class="card mb-6 mb-xl-0 shadow-light-lg">

						<!-- Image -->
						<a class="card-img-top" href="#!" target="_blank">
							<img src="https://www.xtone-surface.com/src/img/graphics/sl-aged-dark-2.jpg" alt="..." class="img-fluid">
						</a>

						<!-- Shape -->
						<div class="position-relative">
							<div class="shape shape-fluid-x shape-bottom text-white">
							   <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
							</div>
						</div>

						<div class="col-12   text-center p-4">
							<input  type="checkbox" value="Si" name="piedra">
							<label  for="defaultCheck1">
							Piedra
							</label>
						</div>

				    </div>

			  </div>
			   <div class="col-12 col-xl-6 d-flex p-3">
			    
					<!-- Card -->
					<div class="card mb-6 mb-xl-0 shadow-light-lg">

						<!-- Image -->
						<a class="card-img-top" href="#!" target="_blank">
							<img src="https://www.xtone-surface.com/src/img/graphics/sl-ewood-camel-2.jpg" alt="..." class="img-fluid">
						</a>

						<!-- Shape -->
						<div class="position-relative">
							<div class="shape shape-fluid-x shape-bottom text-white">
							   <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
							</div>
						</div>

						<div class="col-12   text-center p-4">
							<input  type="checkbox" value="Si" name="madera">
							<label  for="defaultCheck1">
							Madera
							</label>
						</div>

				    </div>

			  </div>
			   <div class="col-12 col-xl-6 d-flex p-3">
			    
					<!-- Card -->
					<div class="card mb-6 mb-xl-0 shadow-light-lg">

						<!-- Image -->
						<a class="card-img-top" href="#!" target="_blank">
							<img src="https://www.xtone-surface.com/src/img/graphics/sl-oxide-brown-3.jpg" alt="..." class="img-fluid">
						</a>

						<!-- Shape -->
						<div class="position-relative">
							<div class="shape shape-fluid-x shape-bottom text-white">
							   <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
							</div>
						</div>

						<div class="col-12   text-center p-4">
							<input  type="checkbox" value="Si" name="metalico">
							<label  for="defaultCheck1">
							Metalico
							</label>
						</div>

				    </div>

			  </div>

			   <div class="col-12 col-xl-6 d-flex p-3">
			    
				<!-- Card -->
				<div class="card mb-6 mb-xl-0 shadow-light-lg">

					<!-- Image -->
					<a class="card-img-top" href="#!" target="_blank">
						<img src="https://www.xtone-surface.com/src/img/graphics/sl-moon-white-7.jpg" alt="..." class="img-fluid">
					</a>

					<!-- Shape -->
					<div class="position-relative">
						<div class="shape shape-fluid-x shape-bottom text-white">
						   <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
						</div>
					</div>

					<div class="col-12   text-center p-4">
						<input  type="checkbox" value="Si" name="monocolor">
						<label  for="defaultCheck1">
						Monocolor
						</label>
					</div>

			    </div>

			  </div>


			<div class="col-12   text-center p-10 text-center">
			<input class="btn btn-block btn-success lift" name="submit_data" type="submit" value="Enviar encuesta">
			</div>

			
			</div>
			<div class="col">
				<img style="width: 100px;" class=" mx-auto d-block" src="logo.jpg"> 

			<p class="text-center text-muted "><small>Encuesta de satisfación</small></p> 

			<a href="#"><p class="text-center text-muted "><small>Terminos legales</small></p></a> 
			
				
			</div>
	</form>

</body>