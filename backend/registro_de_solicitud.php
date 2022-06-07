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
    <!-- CSS only -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
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