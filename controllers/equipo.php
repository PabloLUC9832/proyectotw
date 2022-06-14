<?php

include_once 'config.php';

class Equipo extends DB{

    public function listarEquipos(){

        $data = $this->connect()->prepare('SELECT * FROM equipos ORDER BY NumeroInventario ASC');
        $data ->execute();

        foreach ($data as $row) {
            echo  "<tr>" ;
            echo  "<td>" . $row['NumeroInventario'] . "</td>";
            echo  "<td>" . $row['NombreDelEquipo'] . "</td>";
            echo  "<td>" . $row['Descripcion'] . "</td>";
            echo  "</tr>" ;

        }

    }
}

?>