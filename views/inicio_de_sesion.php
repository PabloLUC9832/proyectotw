<?php
//session_start();
 //Si el usuario ya ha iniciado sesión, entonces que se re diriga al home
if(isset($_SESSION["usuario"])  === true){
    header("location: home.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<h1 class="text-center">Inicio de Sesión</h1>

    <div class="container m-5">

        <form action="" method="POST">

            <?php if(isset($errorLogin)): ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>:(</strong> <?=  $errorLogin; ?> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php endif; ?>



            <div class="form-group row">
                <label for="matricula" class="col-sm-2 col-form-label col-form-label">Matrícula</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="matricula" placeholder="matrícula" required name="matricula">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label col-form-label">Contraseña</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" id="password" placeholder="*****" required name="password">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-5">Iniciar sesión</button>

        </form>

        <p class="mt-5">¿Aún no tienes cuenta? <span><a href="../controllers/registro.php"><b>Registrate aquí</b></a></span> </p>

    </div>

</body>
</html>