<?php
include ('recortes.php');
include ('../controllers/loginController.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleShop-Login</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/correctivos.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet" />
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<?php
            mostrarMenu();
?>

<form action="" method="post" class="ingreso">

	<div class="login-wrap">
		<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingresar</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Correo electrónico</label>
					<input id="user" type="text" class="input" name="email">
				</div>
				<div class="group">
					<label for="pass" class="label">Contraseña</label>
					<input id="pass" type="password" class="input" data-type="password" name="contrasenna">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span>Mostrar contraseña</label>
				</div>
				<div class="group">
					<input type="submit" class="button" name="btnIngresar" value="Ingresar">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Olvidaste tu contraseña?</a>
				</div>
			</div>
		</form>
<form action="" method="post" class="registro">
			<div class="sign-up-htm">
				
                <div class="group">
                    <label for="pass" class="label">Correo electrónico</label>
                    <input id="emailRegistrar" type="email" class="input" name="emailRegistrar" require onblur="HabilitarBoton();">
                </div>
				<div class="group">
					<label for="pass" class="label">Contraseña</label>
					<input id="contrasennaRegistrar" type="password" class="input" name="contrasennaRegistrar" data-type="password" require onkeyup="HabilitarBoton();">
				</div>
				<div class="group">
					<label for="pass" class="label">Repetir contraseña</label>
					<input id="confirmarContrasenna" type="password" class="input" name="confirmarContrasenna" data-type="password" require onkeyup="HabilitarBoton();">
				</div>
				<div class="group">
					<input type="submit" id="btnRegistrarCuenta" disabled class="button" name="btnRegistrarCuenta" value="Registrarse" onblur="HabilitarBoton();">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Tienes cuenta?</a>
				</div>
			</div>
		</div>
	</div>
</form>
</div>



<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/funcionesRegistro.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>