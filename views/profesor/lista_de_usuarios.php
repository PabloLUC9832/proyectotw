<?php 
include_once '../../controllers/usuario.php';
$usuario = new Usuario();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="data:image/png;base64,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">

</head>
<body>

    <!-- HEADER -->
    <?php
    include './header.php';
    ?>
    <!-- HEADER -->


<main>

    <h1 class="text-center">Lista de Usuarios</h1>

    <p class="text-left">En la siguiente lista podrás ver la información básica de los usuarios registrados.</p>

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Matricula</th>
          <th scope="col">Nombre</th>
          <th scope="col">Contraseña</th>
          <th scope="col">Carrera</th>
          <th scope="col">Correo</th>
          <th scope="col">Rol</th>
        </tr>
      </thead>
      <tbody>

<!--         <tr>
          <td>Pablo</td>
          <td>10:50</td>
        </tr> -->
    
          
          <?= $usuario->listarUsuarios(); ?>

    
      </tbody>
    </table>

</main>


</body>
</html>