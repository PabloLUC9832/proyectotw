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

</head>
<body>

    <!-- HEADER -->
    <?php
    include './header.php';
    ?>
    <!-- HEADER -->


<main>

    <h1 class="text-center">Bitácora</h1>

    <p class="text-left">Esta bitácora muestra los equipos de cómputo actualmente en uso.</p>

    <table class="table table-hover">
      <thead>
        <tr>
        <th scope="col">Matrícula</th>
          <th scope="col">Nombre</th>
          <th scope="col">Hora Entrada</th>
          <th scope="col">Hora Salida</th>
          <th scope="col">Fecha de uso</th>
          <th scope="col">Maestro</th>
          <th scope="col">Materia</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">518s</th>
          <td>pabñ</td>
          <td>10:50</td>
          <td>11:50</td>
          <td>19/08/22</td>
          <td>X</td>
          <td>Y</td>
        </tr>
    
        <tr>
          <th scope="row">2</th>
          <?php for($i=1;$i<7;$i++): ?>
          <td><?= $i ?></td>
          <?php endfor; ?>
        </tr>
    
      </tbody>
    </table>

</main>


</body>
</html>