<?php
session_start();
include("../Req_php/conexion.php");
if(isset($_SESSION['user']))
 {?>

<?php

$peticion = "select * from libros";
$resultado = mysqli_query($conexion, $peticion);
$contados = mysqli_num_rows($resultado);


$peticion5 = "select * from administrador_biblioteca";
$resultado5 = mysqli_query($conexion, $peticion5);
$contados5 = mysqli_num_rows($resultado5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Biblioteca Fer | Panel Control</title>
    <link rel="shortcut icon" href="../images/iconolibreria.ico">
    <!-- Libreria de Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- hojas de estilo css -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- graficos morris -->
    <link href="css/morris.css" rel="stylesheet">
    <!-- fuentes -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
   <?php include('navegacion.php');?>
   
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Cabecera-->
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-lg-12">
                        <h3 class="page-header">
                            <small><img src=""></small><B>  Administracion de Biblioteca</B> </h3>
                    </div>
                </div>
                <!-- /.inicio de fila row-->
                <div class="row"> 
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Mensajes</div>
                                        <div>Mensajes y comentarios</div>
                                        Todos :
                                        <B> <?php  echo $contados2;?></B>
                                    </div>
                                </div>
                            </div>
                            <a href="comentarios.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Mensajes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                         <i class="fa fa-book fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Libros</div>
                                        <div>Lista de Libros</div>
                                        Todos los Libros :
                                        <B> <?php  echo $contados;?></B>
                                    </div>
                                </div>
                            </div>
                            <a href="libros.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Libros</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                   

                      <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Estudiantes</div>
                                        <div>Listado de Estudiantes</div>
                                          Todos los Estudiantes :
                                        <B> <?php echo $contados6;?></B>
                                    </div>
                                </div>
                            </div>
                            <a href="estudiantes.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Estudiantes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                      <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Bibliotecarios</div>
                                        <div>Usuarios del Sistema</div>
                                          Total :
                                        <B> <?php  echo $contados5;?></B>
                                    </div>
                                </div>
                            </div>
                            <a href="usuarios.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Empleados</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /.row o fila -->
            </div>
            <!-- /.contenedor -->
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
<?php


}else{
    echo '<script> window.location="../login.php"; </script>';
}