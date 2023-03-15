<?php
include '../models/loginModel.php';






if (isset($_POST["btnIngresar"])){
    session_start();


$email= $_POST["email"];
$contrasenna= $_POST["contrasenna"];

$resultado= ValidacionInicio($email,$contrasenna);

if($resultado -> num_rows > 0)
    {
        $datosResultado= mysqli_fetch_array($resultado);
        $_SESSION["email"]=$datosResultado["email"];
        header("location: ../index.php");
    }
    else
    {
    
        header("location: ../views/login.php");
    }



}




if (isset($_POST["btnRegistrarCueta"])){


$emailRegistrar= $_POST["emailRegistrar"];
$contrasennaRegistrar =$_POST["contrasennaRegistrar"];




$resultado= ValidacionRegistro($emailRegistrar,$contrasennaRegistrar);

if($resultado == 1){

    header("location: /Proyecto/views/login.php");
    
}else{
    
    header("location: /Proyecto/views/index.php");
   

}


}


if(isset($_GET["VerificarExisteCorreo"]))
{   
    $resultado = VerificarExisteCorreoModel($_GET["emailRegistrar"]);

    if($resultado -> num_rows > 0)
    {
        echo "Ya hay un usuario registrado con este correo";
    }
    else
    {
        echo "OK";
    }
}

?>