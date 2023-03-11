<?php

    function OpenDataBase()
{

    $servidor="127.0.0.1:3307";
    $usuario="root";
    $contrasenna="";
    $baseDatos="proyecto_styleshop";

return mysqli_connect($servidor,$usuario,$contrasenna,$baseDatos);


}

function Close($instancia)
{
    mysqli_close($instancia);
}


?>