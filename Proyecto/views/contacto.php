<?php
include ('recortes.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactarnos</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="../views/css/contacto.css"">
    <link  rel="stylesheet" href="css/correctivos.css"/>
   
</head>
<body>
    
<?php
            mostrarMenu();
?>

<div class="container">
	<div class="row">
			<h1>Contactarnos</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">Estamos para servirte, escríbenos!</h4>
	</div>
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" required />
					<label>Nombre</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" required />
					<label>Correo electrónico</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" required />
					<label>Teléfono</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea required></textarea>
					<label>Mensaje</label>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="btn-lrg submit-btn">Enviar</div>
			</div>
	</div>
</div>





</body>
</html>