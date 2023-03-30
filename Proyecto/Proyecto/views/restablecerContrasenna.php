<?php
    include ('recortes.php');
    include_once '../controllers/usuariosController.php';
?>

<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/recuperarContrasenna.css" rel="stylesheet" />
    <link href="css/correctivos.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
    
    <?php
        mostrarMenu();
    ?>



<section class="section-recuperar">

<form method="post">
<div class="">
    <div class="row d-flex justify-content-center div-formulario">
        <div class="col-md-6 div-form" >
            <H2 class="titulo">Restablecer Contraseña</H2>
            <div class="card px-5 py-5" id="form1">
                <div class="form-data" v-if="!submitted">
                    <div class="forms-inputs mb-4"> <span>Correo electrónico</span> 
                    <input placeholder="Escribe tu Correo electrónico" name="email"  type="text" class="form-control">
                        <div class="invalid-feedback">A valid email is required!</div>
                    </div>
                   
                    <div class="mb-3"> <button type="submit" name="btnRecuperar" class="btn btn-dark w-100">Recuperar</button> </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
</form>
</section>





<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/funcionesRegistro.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>