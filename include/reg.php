<?php incluye "include/conecta.php"; ?>
<?php incluye "include/Acciones.php"; ?>
<! DOCTYPE html>
<html lang="es">
<cabeza>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</cabeza>
<cuerpo>
    <div class="container m-o content-justify-center py-2">
        <h1 class="text-success">Registro</h1>
    </Div>
    <form id="Registro" action="<?php echo $SERVER['php_self']; ?>" method="post">
        <div class="row-text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="Nombre" class="form-control" placeholder="Nombre" requerido>
            </Div>
        </Div>
        <div class="row-text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="Apellidos" class="form-control" placeholder="Apellidos" requerido>
            </Div>
        </Div>
        <div class="row-text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <textarea class="form-control">Direccion</textarea>
            </Div>
        </Div>
        <div class="row-text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="tel" name="Telefono" class="form-control" placeholder="55-55-55-55" requerido>
            </Div>
        </Div>
        <div class="row-text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="date" name="Fecha" class="form-control" required>
            </Div>
        </Div>
        <div class="row-text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="email" name="email" placeholder="email" class="form-control" required>
            </Div>
        </Div>
        <div class="row-text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="email" name="email" placeholder="email" class="form-control" required>
            </Div>
        </Div>
        <div class="row-text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="submit" value="registrar" name="btn" class="btn btn-success">
            </Div>
        </Div>
    </forma>    
</cuerpo>
?>