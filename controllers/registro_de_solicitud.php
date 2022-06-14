<?php

/* echo "<pre>";
print_r($_POST);
echo "</pre>";
 */
$nombre = $_POST["nombre"];
$matricula = $_POST["matricula"];
$carrera = $_POST["carrera"];
$horaEntrada = $_POST["horaEntrada"];
$horaSalida = $_POST["horaSalida"];
$nombreEquipo = $_POST["nombreEquipo"];
$descripcionEquipo = $_POST["descripcionEquipo"];
$nInventario = $_POST["nInventario"];
$objetivo = $_POST["objetivo"];
$materia = $_POST["materia"];
$maestro = $_POST["maestro"];

$flag = true;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Préstamos UV | Home</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <!-- HEADER -->
    <?php
    include '../views/header.php';
    ?>
    <!-- HEADER -->

    <?php if($flag): ?>
    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>¡Éxito!</strong> Tu solicitud ha sido enviada exitosamente. <?= $carrera ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    <?php else: ?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error :(</strong> Ha ocurrido un error al enviar tu solicitud, por favor  <a href="../views/registro_de_solicitud.php" class="alert-link">vuelve a intentarlo</a> .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <?php endif; ?>

</body>
</html>