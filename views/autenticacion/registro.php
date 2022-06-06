<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarte</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>    
</head>
<body>

<h1 class="text-center">Registrarse</h1>

    <div class="container m-5">

        <form action="">
            
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label col-form-label">Nombre</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" required name="nombre">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="matricula" class="col-sm-2 col-form-label col-form-label">Matrícula</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="matricula" placeholder="Matrícula" required name="matricula">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label col-form-label">Contraseña</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" id="password" placeholder="*****" required name="password">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-5">Registrar</button>

        </form>

        <p class="mt-5">Ya tienes cuenta. <span><a href="./inicio_de_sesion.php"><b>Inicia Sesión aquí</b></a></span> </p>

    </div>


</body>
</html>