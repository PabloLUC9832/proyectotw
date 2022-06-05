<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Solicitud</title>
    <!-- CSS only -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>    
</head>
<body>

    <!-- HEADER -->
    <?php
    include 'header.php';
    ?>
    <!-- HEADER -->

    <main>

        <h2 class="text-center">Regitro de Solicitud para el préstamo de un equipo de cómputo</h2>

        <div class="text-right">
            <p><b><?php echo date('d-m-Y' ); ?></b></p>
            <a type="button" class="btn btn-outline-danger btn-sm" href="./index.php">Salir</a>
        </div>
        
        <form>
            <div class="form-group row">
                <label for="usuario" class="col-sm-2 col-form-label col-form-label-sm">Nombre de usuario</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="usuario" placeholder="Nombre de usuario" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="matricula" class="col-sm-2 col-form-label col-form-label-sm">Matrícula</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="matricula" placeholder="matrícula" required>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="carrera" class="col-sm-2 col-form-label col-form-label-sm">Carrera</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="carrera" placeholder="carrera" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="horaEntrada" class="col-sm-2 col-form-label col-form-label-sm">Hora de entrada</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="horaEntrada" placeholder="Hora de entrada" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="horaSalida" class="col-sm-2 col-form-label col-form-label-sm">Hora de salida</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="horaSalida" placeholder="Hora de salida" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="nombreEquipo" class="col-sm-2 col-form-label col-form-label-sm">Nombre del equipo</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="nombreEquipo" placeholder="Nombre del equipo" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcionEquipo" class="col-sm-2 col-form-label col-form-label-sm">Descripción del equipo</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="descripcionEquipo" placeholder="Descripción del equipo" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="nInventario" class="col-sm-2 col-form-label col-form-label-sm">Número de inventario</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="nInventario" placeholder="Número de inventario" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="objetivo" class="col-sm-2 col-form-label col-form-label-sm">Objetivo del préstamo</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="objetivo" placeholder="Objetivo del préstamo" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="materia" class="col-sm-2 col-form-label col-form-label-sm">Materia</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="materia" placeholder="Materia" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="maestro" class="col-sm-2 col-form-label col-form-label-sm">Maestro</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="maestro" placeholder="Maestro" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="fecha" class="col-sm-2 col-form-label col-form-label-sm">Fecha</label>
                <div class="col-sm-9">
                    <input type="date" value="<?php echo date('Y-m-d'); ?>"  disabled  id="fecha"/>
                </div>
            </div>

<!--             <div class="tex-center">
                <button type="submit" class="btn btn-primary mb-2">Enviar</button>
            </div> -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12 bg-light text-center">
                        <a type="button" class="btn btn-warning" href="./index.php">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>

        </form>

    </main>

</body>
</html>