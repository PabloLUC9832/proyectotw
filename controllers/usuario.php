<?php

include_once 'config.php';

class Usuario extends DB{

    private $nombre;
    private $matricula;
    private $password;

    public function userExists($matricula,$password){
    //public function userExists($nombre,$password){
        $md5pass = md5($password);

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE Matricula = :Matricula AND Pasword = :Pasword');
        //$query = $this->connect()->prepare('SELECT * FROM usuarios WHERE nombre = :nombre AND password = :password');
        //$query->execute(['nombre'=> $matricula, 'pasword' => $md5pass]);
        $query->execute(['Matricula'=> $matricula, 'Pasword' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }

    }

    public function setUser($matricula){
    //public function setUser($nombre){
        
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matricula');
        //$query = $this->connect()->prepare('SELECT * FROM usuarios WHERE nombre = :nombre');
        $query ->execute(['matricula' => $matricula]);
        //$query ->execute(['nombre' => $nombre]);

        foreach ($query as $currentUser){
            $this->matricula = $currentUser['Matricula'];
            $this->nombre = $currentUser['NombreCompleto'];
        }


    }

    public function insertarUser($matricula,$nombreCompleto,$pasword,$carrera,$correo,$rol){
        $md5pass = md5($pasword);

        $query = $this->connect()->prepare('INSERT INTO usuarios (Matricula,NombreCompleto,Pasword,Carrera,Correo,Rol) VALUES (:Matricula,:NombreCompleto, :Pasword, :Carrera,:Correo,:Rol)');
        $query -> execute(['Matricula' => $matricula, 
        'NombreCompleto' => $nombreCompleto, 
        'Pasword' => $md5pass,
        'Carrera'=>$carrera,
        'Correo'=>$correo,
        'Rol'=>$rol
        ]);

        $query1 = $this->connect()->prepare('SELECT * FROM usuarios WHERE Matricula = :Matricula');
        //$query = $this->connect()->prepare('SELECT * FROM usuarios WHERE nombre = :nombre');
        $query1 ->execute(['Matricula' => $matricula]);
        //$query ->execute(['nombre' => $nombre]);

        foreach ($query1 as $currentUser){
            $this->matricula = $currentUser['Matricula'];
            $this->nombre = $currentUser['NombreCompleto'];
        }        

         if($query){
            return true;
        }else{
            return false;
        } 
 
    }

    public function getNombre(){
        return $this->nombre ;         
    }

    public function getMatricula(){
        return $this->matricula ;
    }    

    public function listarUsuarios(){

        $nombre = "";
        $matricula = "";

        $data = $this->connect()->prepare('SELECT * FROM usuarios');
        $data ->execute();
        // and somewhere later:
        foreach ($data as $row) {
            echo  "<tr>" ;
            echo  "<td>" . $row['Matricula'] . "</td>";
            echo  "<td>" . $row['NombreCompleto'] . "</td>";
            echo  "<td>" . $row['Pasword'] . "</td>";
            echo  "<td>" . $row['Carrera'] . "</td>";
            echo  "<td>" . $row['Correo'] . "</td>";
            echo  "<td>" . $row['Rol'] . "</td>";
            echo  "</tr>" ;

        }

    }

    public function listarUsuarios2(){

        $nombre = "";
        $matricula = "";

        $data = $this->connect()->prepare('SELECT * FROM usuarios');
        $data ->execute();
        // and somewhere later:
        foreach ($data as $row) {
            //echo  $row['matricula'];
            echo  "<td>" . $row['matricula'] . "</td>";;
        }

    }



}


?>