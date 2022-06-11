<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarte</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<h1 class="text-center">Registrarse</h1>

    <div class="container m-5">

        <?php if(isset($mensaje)): ?>

        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong> <?= $mensaje ?> </strong>  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <?php endif; ?>

        <form action="" method="POST">
            
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label col-form-label">Nombre Completo</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" required name="NombreCompleto">
                    <!-- <input onkeydown="return /[a-z]/i.test(event.key)"> -->
                </div>
            </div>

            <div class="form-group row">
                <label for="matricula" class="col-sm-2 col-form-label col-form-label">Matrícula</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="matricula" placeholder="Matrícula" required name="Matricula">
                </div>
            </div>

            <div class="form-group row">
                    <label for="carrera" class="col-sm-2 col-form-label col-form-label-sm">Carrera</label>
                    <div class="col-sm-9">
                        <!-- <input type="text" class="form-control form-control-sm" id="carrera" placeholder="carrera" required name="carrera"> -->
                        <select class="custom-select custom-select" name="Carrera">
                            <option selected>Selecciona una carrera</option>
                            <option value="Estadística">Estadística</option>
                            <option value="Redes y Servicio de Cómputo">Redes y Servicio de Cómputo</option>
                            <option value="Tecnologías Computacionales">Tecnologías Computacionales</option>
                            <option value="Ingeniería de Software">Ingeniería de Software</option>
                            <option value="Ciencias y Técnicas Estadísticas">Ciencias y Técnicas Estadísticas</option>
                        </select>
                    </div>
                </div>
            
            <div class="form-group row">
                <label for="matricula" class="col-sm-2 col-form-label col-form-label">Correo</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="correo" placeholder="Correo" required name="Correo">
                </div>
            </div>

            <div class="form-group row">
                    <label for="Rol" class="col-sm-2 col-form-label col-form-label-sm">Rol</label>
                    <div class="col-sm-9">
                        <!-- <input type="text" class="form-control form-control-sm" id="carrera" placeholder="carrera" required name="carrera"> -->
                        <select class="custom-select custom-select" name="Rol">
                            <option selected>Seleccione su rol</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Estudiante">Estudiante</option>
                            <option value="Profesor">Profesor</option>
                        </select>
                    </div>
                </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label col-form-label">Contraseña</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" id="password" placeholder="*****" required name="Pasword">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-5">Registrar</button>

        </form>

        <!-- <p class="mt-5">Ya tienes cuenta. <span><a href="./inicio_de_sesion.php"><b>Inicia Sesión aquí</b></a></span> </p> -->
        <p class="mt-5">Ya tienes cuenta. <span><a href="../views/index.php"><b>Inicia Sesión aquí</b></a></span> </p>

    </div>


</body>
</html>