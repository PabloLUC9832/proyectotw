<?php
include_once '../../controllers/usuario.php';
$usuario = new Usuario();
//print_r($_POST);

if(isset($_POST['matricula']) && isset($_POST['nombre']) && isset($_POST['carrera']) && isset($_POST['correo']) && isset($_POST['rol'])){

    $usuario->actualizar($_POST['matricula'],$_POST['nombre'],$_POST['carrera'],$_POST['correo'],$_POST['rol']);
    $msjE = "Actualizado con éxito";
}else{
    $msj = "Ingresa los datos solicitados";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>

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

    <h2 class="text-center">Edición de usuario</h2>



    <div class="container">

        <?php if(isset($msj)): ?>

        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong> <?=  $msj; ?> </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <?php endif; ?>

        <?php if(isset($msjE)): ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> <?=  $msjE; ?> </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <?php endif; ?>        

        <!-- <form action="../../controllers/edit.php" method="POST"> -->
        <form action="" method="POST">

            <div class="form-group row">
                <label for="matricula" class="col-sm-2 col-form-label col-form-label-sm">Matricula</label>
                <div class="col-sm-9">
                <label for="matricula" class="col-sm-2 col-form-label col-form-label-sm"><?= $usuario->setMatricula($_GET['matricula']);?></label>
                    <input type="text" class="form-control form-control-sm" id="nombre" required name="matricula" value="<?= $usuario->setMatricula($_GET['matricula']);?>" hidden>
                </div>
            </div>

            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label col-form-label-sm">Nombre</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="nombre" required name="nombre" value="<?= $usuario->setNombre($_GET['matricula']);?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="carrera" class="col-sm-2 col-form-label col-form-label-sm">Carrera</label>
                <div class="col-sm-9">
                    <select class="custom-select custom-select" name="carrera">
                        <option selected><?= $usuario->setCarrera($_GET['matricula']);?></option>
                        <option value="Estadística">Estadística</option>
                        <option value="Redes y Servicio de Cómputo">Redes y Servicio de Cómputo</option>
                        <option value="Tecnologías Computacionales">Tecnologías Computacionales</option>
                        <option value="Ingeniería de Software">Ingeniería de Software</option>
                        <option value="Ciencias y Técnicas Estadísticas">Ciencias y Técnicas Estadísticas</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="correo" class="col-sm-2 col-form-label col-form-label-sm">Correo</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="correo" required name="correo" value="<?= $usuario->setCorreo($_GET['matricula']);?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="carrera" class="col-sm-2 col-form-label col-form-label-sm">Rol</label>
                <div class="col-sm-9">
                    <select class="custom-select custom-select" name="rol">
                        <option selected><?= $usuario->setRol($_GET['matricula']);?></option>
                        <option value="Administrador">Administrador</option>
                        <option value="Profesor">Profesor</option>
                        <option value="Estudiante">Estudiante</option>
                    </select>
                </div>
            </div>            

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a type="button" class="btn btn-warning" href="./lista_de_usuarios.php">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


</body>
</html>
