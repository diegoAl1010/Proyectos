<?php
$servidor = "localhost";
$usuario = "root";
$Password = "";
$Bd = "dlyp07";
$conexion = mysqli_connect($servidor, $usuario, $Password, $Bd);
if($conexion->connect_error){
    die('Error al conectar la base de datos' .$conexion->connec_error);
}


?>