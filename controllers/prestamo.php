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

    public function listarPrestamos(){
        //$fecha = date('d-m-Y');
        $fecha = date('Y-m-d');
        $data = $this->connect()->prepare('SELECT * FROM prestamos WHERE FechaActual = "' . $fecha . '"');
        $data ->execute();

        foreach ($data as $row) {
            echo  "<tr>" ;
            echo  "<td>" . $row['MatriculaUsuario'] . "</td>";
            echo  "<td>" . $row['Materia'] . "</td>";
            echo  "<td>" . $row['Maestro'] . "</td>";
            echo  "<td>" . $row['ObjetivoPrestamo'] . "</td>";
            echo  "<td>" . $row['NombreDelEquipo'] . "</td>";
            echo  "<td>" . $row['HoraEntrada'] . "</td>";
            echo  "<td>" . $row['HoraSalida'] . "</td>";
            echo  "<td>" . $row['FechaActual'] . "</td>";
            echo  "</tr>" ;

        }        

    }





}

?>