<?php

include 'conexion.php';


function ValidacionInicio($email,$contrasenna){
    $instancia= OpenDataBase();
    
    $sentencia= "CALL ValidarInicio('$email','$contrasenna')";
    $resultado= $instancia-> query($sentencia);



    Close($instancia);
    return $resultado;
}


function ValidacionRegistro($emailRegistrar,$contrasennaRegistrar){



    $instancia = OpenDataBase();

    $sentencia = "CALL ProcedimientoInsertar('$emailRegistrar','$contrasennaRegistrar')";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado; 
}








function VerificarExisteCorreoModel($emailRegistrar)
{
    $instancia = OpenDataBase();

    $sentencia = "CALL VerificarExisteCorreo('$emailRegistrar')";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;        
}

?>