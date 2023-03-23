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







function VerDatosUsuarioModel($consecutivoUsuario)
{
    $instancia = OpenDataBase();

    $sentencia = "CALL VerDatosUsuario($consecutivoUsuario);";
    $resultado = $instancia -> query($sentencia);
    Close($instancia);
    return $resultado;   
}




function VerPerfilesModel()
{
    $instancia = OpenDataBase();

    $sentencia = "CALL VerPerfiles();";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;   
}












function ActualizarUsuarioModel($idUsuario, $rol, $cedula, $telefono, $nombre, $contrasenna)
{
    $instancia = OpenDataBase();

    $sentencia = "CALL ActualizarUsuario('$idUsuario', '$rol', '$cedula', '$telefono', '$nombre', '$contrasenna');";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}


?>