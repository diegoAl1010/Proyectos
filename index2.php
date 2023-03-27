<?php
error_reporting(0);
if (isset($_POST['btn'])){
    $Numero1=$_POST['Caja1'];
    $Numero2=$_POST['Caja2'];
    $Numero1=(int)$Numero1;
    $Numero2=(int)$Numero2;
    $Resultado=$Numero1+$Numero2;
    $valor=$Resultado;
    echo $valor;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.4.min.js"></script>
    <title>Practica 1 | includes con php</title>
</head>
<body>
    <!--narvar-->
    <?php include "include/navbar.php";?> 
    <!--teminonarvar-->
        <!--menu-->
        <?php include "include/menu.php";?> 
    <!--finmenu-->
    <script SRC="js/bootstrap.min.js"></script>

    <div class="Col-lg-12">
        <div class="row">
            <h1 class="text-center">SUMAS♥</h1>
</div> 
<div class="row">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <input type="text" name="Caja1" required>
    <input type="text" name="Caja2" required>
    <input type="submit" name="btn" value="calcular">;

</form>
</div>

</body>
</html>

