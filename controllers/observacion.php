<?php

include_once 'config.php';

class Observacion extends DB{

    public function nombreEquipos(){

        $data = $this->connect()->prepare('SELECT * FROM equipos ORDER BY NumeroInventario ASC');
        $data ->execute();

        foreach ($data as $row) {
            echo  "<option value='". $row['NombreDelEquipo'] . "'>" . $row['NombreDelEquipo'] . "</option>";

        }

    }

    public function insertarObservacion($nombreEquipo,$ip,$observacion){

        $query = $this->connect()->prepare('INSERT INTO observaciones (NombreDelEquipo,IP,Observacion) VALUES (:NombreDelEquipo, :IP, :Observacion)');
        $query -> execute([ 
        'NombreDelEquipo' => $nombreEquipo, 
        'IP' => $ip,
        'Observacion' => $observacion

        ]);

         if($query){
            return true;
        }else{
            return false;
        } 
 
    }
    
    public function listarObservaciones(){

        $data = $this->connect()->prepare('SELECT * FROM observaciones ORDER BY ID ASC');
        $data ->execute();

        foreach ($data as $row) {
            echo  "<tr>" ;
            echo  "<td>" . $row['NombreDelEquipo'] . "</td>";
            echo  "<td>" . $row['IP'] . "</td>";
            echo  "<td>" . $row['Observacion'] . "</td>";
            echo  "</tr>" ;

        }

    }

}


?>
