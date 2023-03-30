<?php
require_once('../models/usuariosModel.php');

function VerDatosUsuarios()
{
    $resultado = VerDatosUsuariosModel($_SESSION["idRol"],$_SESSION["email"] );
    if($resultado -> num_rows > 0)
    {
        While($datosResultado = mysqli_fetch_array($resultado))
        {   
            

            if($_SESSION["email"] == $datosResultado["email"])
            {
                echo "
                <tr>
                <td class='action-list'>
                <ul>
                    <li><a href='../views/verUsuario.php?q=" . $datosResultado["idUsuario"] . "' class='btn btn-primary'><i class='fa fa-pencil'></i></a></li>
                    <li><a href='#' class='btn btn-danger' style='cursor:not-allowed'><i class='fa fa-times'></i></a></li>
                </ul>
              </td>";
            }
            else
            {
                echo "
                <tr>
                <td class='action-list'>
                <ul>
                    <li><a href='../views/verUsuario.php?q=" . $datosResultado["idUsuario"] . "' class='btn btn-primary'><i class='fa fa-pencil'></i></a></li>
                    <li><a href='#' class='btn btn-danger'><i class='fa fa-times'></i></a></li>
                </ul>
              </td>";
            }

            
            
                    


            echo "<td>" . $datosResultado["cedula"] . "</td>";
            echo "<td>" . $datosResultado["nombre"] . "</td>";
            echo "<td>" . $datosResultado["telefono"] . "</td>";
            echo "<td>" . $datosResultado["email"] . "</td>";
            echo "</tr>";




            
                                           
                                          
                                    
        }
    }
    else
    {
        echo 'no se encuentran usuarios';
    }
}




















function VerDatosUsuario($consecutivoUsuario)
{
    $resultado = VerDatosUsuarioModel($consecutivoUsuario);
    if($resultado -> num_rows > 0)
    {
        return mysqli_fetch_array($resultado);
    }
}

















function VerPerfiles($TipoUsuario)
{
    $resultado = VerPerfilesModel();
    if($resultado -> num_rows > 0)
    {
        while($datosResultado = mysqli_fetch_array($resultado))
        {   
            if($TipoUsuario == $datosResultado["idRol"])
            {
                echo "<option value=" . $datosResultado["idRol"] . " selected>" . $datosResultado["nombreRol"] . "</option>";    
            }
            else
            {
                echo "<option value=" . $datosResultado["idRol"] . ">" . $datosResultado["nombreRol"] . "</option>";
            }
        }
    }
}


















if(isset($_POST["btnActualizarUsuario"]))
{
    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $rol = $_POST["rol"];
    $contrasenna = $_POST["contrasenna"];
    $idUsuario = $_POST["idUsuario"];
    $telefono = $_POST["telefono"];

    $resultado = ActualizarUsuarioModel($idUsuario, $rol, $cedula, $telefono, $nombre, $contrasenna);

    if($resultado == true)
    {
        header("location: ../Views/usuarios.php");
    }
    else
    {
        echo "No se pudo actualizar la información";
    }
}



if(isset($_POST["btnRecuperar"]))
{
    $email = $_POST["email"];
    $resultado = VerificarExisteCuentaModel($email);

    if($resultado -> num_rows > 0)
    {
        $datosResultado = mysqli_fetch_array($resultado);

        $mensaje = "¡Saludos desde StyleShop! La contraseña de su cuenta es: " . $datosResultado["Contrasenna"];
        EnviarCorreo($datosResultado["email"], 'Recuperación de contraseña', $mensaje, null);
    }
}


function EnviarCorreo($destinatario, $asunto, $cuerpo)
{
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $correoSalida = "styleshop.cr@outlook.com";
    $contrasennaSalida = "Camello123!";

    $mail = new PHPMailer();
    $mail -> CharSet = 'UTF-8';

    $mail -> IsSMTP();
    $mail -> Host = 'smtp.office365.com';     
    $mail -> SMTPSecure = 'tls';
    $mail -> Port = 587; // 465 // 25                               
    $mail -> SMTPAuth = true;
    $mail -> Username = $correoSalida;               
    $mail -> Password = $contrasennaSalida;                                
    
    $mail -> SetFrom($correoSalida, "Sistema StyleShop");
    $mail -> Subject = $asunto;
    $mail -> MsgHTML($cuerpo);   
    $mail -> AddAddress($destinatario, 'Usuario Sistema');

    $mail -> send();
}


?>
