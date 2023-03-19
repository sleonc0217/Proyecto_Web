<?php

include_once 'conexion.php';



function VerDatosUsuariosModel($tipoUsuario, $correoElectronico)
{
    $instancia = OpenDataBase();

    $sentencia = "CALL VerDatosUsuarios('$tipoUsuario', '$correoElectronico');";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}



?>