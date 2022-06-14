<?php

include_once 'config.php';

class SolicitudUsuario extends DB{

    public function insertarUser($matricula,$nombreCompleto,$pasword,$carrera,$correo,$rol){
        //$md5pass = md5($pasword);

        $query = $this->connect()->prepare('INSERT INTO usuarios (Matricula,NombreCompleto,Pasword,Carrera,Correo,Rol) VALUES (:Matricula,:NombreCompleto, :Pasword, :Carrera,:Correo,:Rol)');
        $query -> execute(['Matricula' => $matricula, 
        'NombreCompleto' => $nombreCompleto, 
        'Pasword' => $pasword,
        'Carrera'=>$carrera,
        'Correo'=>$correo,
        'Rol'=>$rol
        ]);

         if($query){
            return true;
        }else{
            return false;
        } 
 
    }

    public function getNombre(){
        return $this->nombre ;
    }
   
    //------------------------ LISTA DE SOLICITUDES -------------------------------------------------
    public function listarSolicitudesUsuarios(){

        $data = $this->connect()->prepare('SELECT * FROM solicitudesregistro');
        $data ->execute();
        
        foreach ($data as $row) {
            echo  "<tr>" ;
            echo  "<td>" . $row['Matricula'] . "</td>";
            echo  "<td>" . $row['NombreCompleto'] . "</td>";
            echo  "<td>" . $row['Pasword'] . "</td>";
            echo  "<td>" . $row['Carrera'] . "</td>";
            echo  "<td>" . $row['Correo'] . "</td>";
            echo  "<td>" . $row['Rol'] . "</td>";
            echo  "<td>" . '<a type="button" href="agregaUsuarioSistema.php?matricula=' . $row['Matricula'] . '" class="btn btn-info">Agregar</a>' . "</td>";
            echo  "</tr>" ;

        }

    }

    public function setMatricula($mmatricula){

        $query = $this->connect()->prepare('SELECT * FROM solicitudesregistro WHERE matricula = :matricula');
        $query ->execute(['matricula' => $mmatricula]);
        $row = $query->fetch(PDO::FETCH_NUM);
        $matricula = $row[0];
        echo $matricula;
    }

    public function setNombre($mmatricula){
        $query = $this->connect()->prepare('SELECT * FROM solicitudesregistro WHERE matricula = :matricula');
        $query ->execute(['matricula' => $mmatricula]);
        $row = $query->fetch(PDO::FETCH_NUM);
        $nombre = $row[1];
        echo $nombre;
    }

    public function setPasword($mmatricula){

        $query = $this->connect()->prepare('SELECT * FROM solicitudesregistro WHERE matricula = :matricula');
        $query ->execute(['matricula' => $mmatricula]);
        $row = $query->fetch(PDO::FETCH_NUM);
        $pasword = $row[2];
        echo $pasword;
    }

    public function setCarrera($mmatricula){

        $query = $this->connect()->prepare('SELECT * FROM solicitudesregistro WHERE matricula = :matricula');
        $query ->execute(['matricula' => $mmatricula]);
        $row = $query->fetch(PDO::FETCH_NUM);
        $carrera = $row[3];
        echo $carrera;
    }

    public function setCorreo($mmatricula){

        $query = $this->connect()->prepare('SELECT * FROM solicitudesregistro WHERE matricula = :matricula');
        $query ->execute(['matricula' => $mmatricula]);
        $row = $query->fetch(PDO::FETCH_NUM);
        $correo = $row[4];
        echo $correo;
    }

    public function setRol($mmatricula){

        $query = $this->connect()->prepare('SELECT * FROM solicitudesregistro WHERE matricula = :matricula');
        $query ->execute(['matricula' => $mmatricula]);
        $row = $query->fetch(PDO::FETCH_NUM);
        $rol = $row[5]; 
        echo $rol;
    }

    /*public function actualizar($Matricula,$NombreCompleto,$Carrera,$Correo,$Rol){

        $query = $this->connect()->prepare("UPDATE usuarios SET NombreCompleto='$NombreCompleto',Carrera='$Carrera',Correo='$Correo',Rol='$Rol' WHERE Matricula='$Matricula'");
        $query-> execute();
        if($query){
            echo true;
        }else{
            echo false;
        }

    }*/


    public function eliminar($Matricula){

        $query = $this->connect()->prepare("DELETE FROM solicitudesregistro WHERE Matricula='$Matricula'");
        $query-> execute();
        if($query){
            echo true;
        }else{
            echo false;
        }

    }    


}


?>