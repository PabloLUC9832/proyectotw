<?php 
include_once '../controllers/usuario.php';
$usuario = new Usuario();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Equipos</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <?php if(isset($_SESSION['rol']) == '') :?>
      
      <?php include './anonimo/header.php'; ?>
     
    <?php elseif (isset($_SESSION['rol']) == 'Administrador'): ?>  

      <?php include './administrador/header.php'; ?>
    
    <?php elseif (isset($_SESSION['rol']) == 'Estudiante'): ?>  

      <?php include './estudiante/header.php'; ?>
    
    <?php elseif (isset($_SESSION['rol']) == 'Profesor'): ?>  

      <?php include './profesor/header.php'; ?>

    <?php endif; ?>


<main>

    <h1 class="text-center">Lista de equipos</h1>

    <p class="text-left">En la siguiente lista podrás ver la información de los equipos de cómputo.</p>

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripción</th>
        </tr>
      </thead>
      <tbody>

            
          <?= $usuario->listarEquipos(); ?>

    
      </tbody>
    </table>

</main>


</body>
</html>