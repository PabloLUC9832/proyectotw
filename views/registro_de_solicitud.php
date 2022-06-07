<!-- Añadirlo al php.ini: extension=php_intl.dll -->
<!-- https://unicode-org.github.io/icu/userguide/format_parse/datetime/ -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Solicitud</title>
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

        <h2 class="text-center">Registro de Solicitud para Préstamo de Equipo de Cómputo</h2>

        <div class="text-right">
            <!-- <p><b><?php echo date('l d-m-Y' ); ?></b></p> -->
            <?php 
            date_default_timezone_set( 'America/Mexico_City' );
            $dateTimeObj = new DateTime('now', new DateTimeZone('America/Mexico_City'));
            $dateFormatted =IntlDateFormatter::formatObject($dateTimeObj, 'EEEE dd/MMMM/yyyy ', 'es');
            echo ucwords($dateFormatted);
            ?>
            <a type="button" class="btn btn-outline-danger btn-sm" href="./index.php">Salir</a>
            
        </div>


        
        <div class="container h-100">
            <form action="../backend/registro_de_solicitud.php" method="POST">
                <div class="form-group row">
                    <label for="usuario" class="col-sm-2 col-form-label col-form-label-sm">Nombre de usuario</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="usuario" placeholder="Nombre de usuario" required name="nombre">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matricula" class="col-sm-2 col-form-label col-form-label-sm">Matrícula</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="matricula" placeholder="matrícula" required name="matricula">
                    </div>
                </div>
            
                <div class="form-group row">
                    <label for="carrera" class="col-sm-2 col-form-label col-form-label-sm">Carrera</label>
                    <div class="col-sm-9">
                        <!-- <input type="text" class="form-control form-control-sm" id="carrera" placeholder="carrera" required name="carrera"> -->
                        <select class="custom-select custom-select" name="carrera">
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
                    <label for="horaEntrada" class="col-sm-2 col-form-label col-form-label-sm">Hora de entrada</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="horaEntrada" placeholder="Hora de entrada" required name="horaEntrada">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="horaSalida" class="col-sm-2 col-form-label col-form-label-sm">Hora de salida</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="horaSalida" placeholder="Hora de salida" required name="horaSalida">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nombreEquipo" class="col-sm-2 col-form-label col-form-label-sm">Nombre del equipo</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="nombreEquipo" placeholder="Nombre del equipo" required name="nombreEquipo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="descripcionEquipo" class="col-sm-2 col-form-label col-form-label-sm">Descripción del equipo</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="descripcionEquipo" placeholder="Descripción del equipo" required name="descripcionEquipo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nInventario" class="col-sm-2 col-form-label col-form-label-sm">Número de inventario</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="nInventario" placeholder="Número de inventario" required name="nInventario">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="objetivo" class="col-sm-2 col-form-label col-form-label-sm">Objetivo del préstamo</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="objetivo" placeholder="Objetivo del préstamo" required name="objetivo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="materia" class="col-sm-2 col-form-label col-form-label-sm">Materia</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="materia" placeholder="Materia" required name="materia">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="maestro" class="col-sm-2 col-form-label col-form-label-sm">Maestro</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="maestro" placeholder="Maestro" required name="maestro">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fecha" class="col-sm-2 col-form-label col-form-label-sm">Fecha</label>
                    <div class="col-sm-9">
                        <input type="date" value="<?php echo date('Y-m-d'); ?>"  disabled  id="fecha" name="fecha"/>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a type="button" class="btn btn-warning" href="./index.php">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </main>

</body>
</html>