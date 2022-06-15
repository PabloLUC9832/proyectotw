<?php

include_once 'config.php';

class Prestamo extends DB{

    //INSERTAR UN NUEVO PRESTAMO
    public function insertarPrestamo($Materia,$ObjetivoPrestamo,$HoraEntrada,$HoraSalida,$MatriculaUsuario,$NombreDelEquipo,$Maestro,$FechaActual){

        //$query = $this->connect()->prepare('INSERT INTO prestamos (Materia,ObjetivoPrestamo,HoraEntrada,HoraSalida,NombreDelEquipo,Maestro,FechaActual) VALUES (:Materia,:ObjetivoPrestamo,:HoraEntrada,:HoraSalida,:NombreDelEquipo,:Maestro,:FechaActual) ');
        $query = $this->connect()->prepare('INSERT INTO prestamos (Materia,ObjetivoPrestamo,HoraEntrada,MatriculaUsuario,HoraSalida,NombreDelEquipo,Maestro,FechaActual) VALUES (:Materia,:ObjetivoPrestamo,:HoraEntrada,:MatriculaUsuario,:HoraSalida,:NombreDelEquipo,:Maestro,:FechaActual) ');
        $query -> execute([
        'Materia' => $Materia, 
        'ObjetivoPrestamo' => $ObjetivoPrestamo, 
        'HoraEntrada' => $HoraEntrada,
        'MatriculaUsuario'=>$MatriculaUsuario,
        'HoraSalida'=>$HoraSalida,
        'NombreDelEquipo'=>$NombreDelEquipo,
        'Maestro'=>$Maestro,
        'FechaActual'=>$FechaActual
        ]);

         if($query){
            return true;
        }else{
            return false;
        } 
 
    }







}

?>