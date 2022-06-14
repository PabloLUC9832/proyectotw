<?php
include_once '../../controllers/usuario.php';
$usuario = new Usuario();

if(isset($_POST['matricula'])){
    $usuario->eliminar($_POST['matricula']);
    header ("location:./lista_de_usuarios.php");
}else{
    $msj="";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar usuario</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
</head>
<body>

    <!-- HEADER -->
    <?php
    include './header.php';
    ?>
    <!-- HEADER -->

    <h2 class="text-center">Eliminación de usuario</h2>



    <div class="container">

        <form action="" method="POST">
            &nbsp;
            &nbsp;
            &nbsp;
            <h6 class="text-center"> ¿Estás seguro de eliminar a la matricula <?= $usuario->setMatricula($_GET['matricula']);?> ?</h6>
            <input type="text" class="form-control form-control-sm" id="nombre" required name="matricula" value="<?= $usuario->setMatricula($_GET['matricula']);?>" hidden>
            
            <label>
              
            <?php $usuario->setNombre($_GET['matricula']);  ?> <br>
            <?php $usuario->setCarrera($_GET['matricula']); ?> <br>
            <?php $usuario->setRol($_GET['matricula']);  ?> <br>
            <?php $usuario->setCorreo($_GET['matricula']); ?> <br>
            

            </label>


            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a type="button" class="btn btn-warning" href="./lista_de_usuarios.php">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


</body>
</html>
