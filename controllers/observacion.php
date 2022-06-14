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
        $id=0;
        //$query = $this->connect()->prepare('INSERT INTO observaciones (ID,NombreDelEquipo,IP,Observacion) VALUES (:ID,:NombreDelEquipo, :IP, :Observacion)');
        $query = $this->connect()->prepare('INSERT INTO observaciones (NombreDelEquipo,IP,Observacion) VALUES (:NombreDelEquipo, :IP, :Observacion)');
        //$query -> execute(['ID' => $id, 
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

}


?>
