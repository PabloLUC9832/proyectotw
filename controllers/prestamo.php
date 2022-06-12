<?php

include_once 'config.php';

class Prestamo extends DB{

    private $MatriculaUsuario;
    private $HoraEntrada;
    private $HoraSalida;
    private $NombreDelEquipo;
    private $ObjetivoPrestamo;
    private $Materia;
    private $Maestro;
    private $FechaActual;

    //INSERTAR UN NUEVO PRESTAMO
    public function insertarPrestamo($Materia, $ObjetivoPrestamo, $HoraEntrada, $MatriculaUsuario, $HoraSalida, $NombreDelEquipo, $Maestro, $FechaActual){

        $query = $this->connect()->prepare('INSERT INTO prestamos (Materia,ObjetivoPrestamo,HoraEntrada,MatriculaUsuario,HoraSalida,NombreDelEquipo,Maestro,FechaActual) VALUES (:Materia,:ObjetivoPrestamo,:HoraEntrada,:MatriculaUsuario,:HoraSalida,:NombreDelEquipo,:Maestro,:FechaActual)');
        $query -> execute(['Materia' => $Materia, 
        'ObjetivoPrestamo' => $ObjetivoPrestamo, 
        'HoraEntrada' => $HoraEntrada,
        'MatriculaUsuario'=>$MatriculaUsuario,
        'HoraSalida'=>$HoraSalida,
        'NombreDelEquipo'=>$NombreDelEquipo,
        'Maestro'=>$Maestro,
        'FechaActual'=>$FechaActual
        ]);

        $query1 = $this->connect()->prepare('SELECT * FROM usuarios WHERE Matricula = :MatriculaUsuario');
        //$query = $this->connect()->prepare('SELECT * FROM usuarios WHERE nombre = :nombre');
        $query1 ->execute(['MatriculaUsuario' => $MatriculaUsuario]);
        //$query ->execute(['nombre' => $nombre]);

        foreach ($query1 as $currentUser){
            $this->matricula = $currentUser['MatriculaUsuario'];
            //$this->nombre = $currentUser['NombreCompleto'];
        }        

         if($query){
            return true;
        }else{
            return false;
        } 
 
    }


}

?>