<?php
include ('recortes.php');
include ('../controllers/loginController.php');
include ('../controllers/usuariosController.php');

$resultado = VerDatosUsuario($_GET["q"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver - Usuario</title>
    <link  rel="stylesheet" href="css/correctivos.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link  rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/actualizarUsuario.css">
</head>
<body>

        <?php

        mostrarMenu();

        ?>

        <section>
        
        <div class="registration-form">
        <form action="" method="post">
        <input type="hidden" id="consecutivo" name="idUsuario" value="<?php echo $resultado["idUsuario"] ?>">

            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <label>Correo Electrónico:</label>
                <input type="text" class="form-control item" name="email" placeholder="Correo Electrónico" value="<?php echo $resultado["email"]?>">
            </div>
            <div class="form-group">
            <label>Cédula:</label>
                <input type="text" class="form-control item" id="cedula" name="cedula" placeholder="Cédula" onkeyup="BuscarNombreApi();" value="<?php echo $resultado["cedula"]?>">
            </div>
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" class="form-control item"  id="nombre" name="nombre" placeholder="Nombre" readOnly="true" value="<?php echo $resultado["nombre"]?>">
            </div>
            <div class="form-group">
            <label>Teléfono:</label>
                <input type="text" class="form-control item" name="telefono"  placeholder="Teléfono" value="<?php echo $resultado["telefono"]?>">
            </div>
            <div class="form-group">
            <label>Permisos:</label>
                <select class="form-control item" id="rol" name="rol">
                                                <?php
                                        
                                                    VerPerfiles($resultado["idRol"]);
                                                ?>
                                            </select>            
            </div>

            <div class="form-group">
                <label>Nueva contraseña</label>
                <input type="password" class="form-control item" id="contrasenna" onkeyup="habilitarBotonXcontrasennas();" name="contrasenna" placeholder="Nueva contraseña">
                <label>Confirmar contraseña</label>
                <input type="password" class="form-control item" id="verificarContrasenna"  onkeyup="habilitarBotonXcontrasennas();"  placeholder="Confirmar contraseña">

            </div>


            <div class="form-group">
                <input type="submit" name="btnActualizarUsuario" id="btnActualizarUsuario" class="btn btn-block create-account" value="Actualizar usuario">
            </div>
        </form>
        
    </div>
                

        </section>


        <?php
        
            mostarFooter();
        ?>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/actualizarUsuario.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/apiCedula.js"></script>
</body>
</html>