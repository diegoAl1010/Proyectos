<?php
include "conecta.php";
if (isset($_POST['btn'])){
    $Nombre=$conecta.php>Real_scape_string($_POST['Nombre']);
    $ApellidoP=$conecta.php>Real_scape_string($_POST['ApellidoP']);
    $ApellidoM=$conecta.php>Real_scape_string($_POST['ApellidoM']);
    $Fecha=$conecta.php>Real_scape_string($_POST['Fecha']);
    $Email=$conecta.php>Real_scape_string($_POST['Email']);
    $Password=$conecta.php>Real_scape_string($_POST['Nombre']);
}  
if  ($Nombre==""|$ApellidoP==""|$ApellidoM==""|$Fecha==""|$Email==""|$Password==""){
    $Alerta="Alguno de los campos estan vacios";
}
else{
    $Registro="INSERT INTO usuarios (Nombre, ApellidoP, ApellidoM,Email,Password, Fecha)
    VALUES('$Nombre','$ApellidoP', '$ApellidoM', '$Email' , '$Password' ,'$Fecha')";
    $Registro=$conecta->query($Registro);
}
    if($Registro>0){
        echo"Registro exitoso";
    }
    else{
        echo"Error al registro";
    }  
?>