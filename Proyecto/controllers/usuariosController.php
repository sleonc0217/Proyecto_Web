<?php
include('C:/xampp/htdocs/Proyecto/models/usuariosModel.php');


function VerDatosUsuarios()
{
    $resultado = VerDatosUsuariosModel($_SESSION["idRol"],$_SESSION["email"] );
    if($resultado -> num_rows > 0)
    {
        While($datosResultado = mysqli_fetch_array($resultado))
        {   
            echo "<tr>";

            echo'   
                    <td class="action-list">
                    <li><a href="#" class="btn btn-primary"><i class="fa fa-pencil"></i></a></li>
                    <li><a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a></li>
                    </ul>
                    </td>';

            echo "<td>" . $datosResultado["cedula"] . "</td>";
            echo "<td>" . $datosResultado["nombre"] . "</td>";
            echo "<td>" . $datosResultado["telefono"] . "</td>";
            echo "<td>" . $datosResultado["email"] . "</td>";
            echo '<td><a href="#" class="btn btn-sm btn-success"><i class="fa fa-search"></i></a></td>';
            echo "</tr>";




            
                                           
                                          
                                    
        }
    }
    else
    {
        echo 'no se encuentran usuarios';
    }
}


?>
