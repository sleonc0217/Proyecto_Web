<?php
include ('recortes.php');
include ('../controllers/usuariosController.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios - StyleShop</title>
    <link  rel="stylesheet" href="../views/css/styles.css" />
    <link rel="stylesheet" href="../views/css/contacto.css">
    <link  rel="stylesheet" href="css/correctivos.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>



        <?php

            mostrarMenu();
        
        ?>

        <section class="section-tabla">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <h5 class="titulo-usuarios">Listado de usuarios</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Opciones</th>
                                            <th>Cédula</th>
                                            <th>Nombre</th>
                                            <th>Teléfono</th>
                                            <th>Email</th>
                                            <th>Consultar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         
                                    <?php
                                        VerDatosUsuarios();
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    
                                    <div class="col-sm-6 col-xs-6">

                                    <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                                    </ul>
                                    </nav>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>







        <?php

            mostarFooter();

        ?>



</body>
</html>