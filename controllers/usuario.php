<?php

include_once 'config.php';

class Usuario extends DB{

    private $nombre;
    private $matricula;

    public function userExists($matricula,$password){
    //public function userExists($nombre,$password){
        $md5pass = md5($password);

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matricula AND password = :password');
        //$query = $this->connect()->prepare('SELECT * FROM usuarios WHERE nombre = :nombre AND password = :password');
        //$query->execute(['nombre'=> $nombre, 'password' => $md5pass]);
        $query->execute(['matricula'=> $matricula, 'password' => $md5pass]);

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
            $this->matricula = $currentUser['matricula'];
            $this->nombre = $currentUser['nombre'];
        }


    }

    public function insertarUser($nombre,$matricula,$password){
        $md5pass = md5($password);

        $query = $this->connect()->prepare('INSERT INTO usuarios (nombre,matricula,password) VALUES (:nombre, :matricula, :password)');
        $query -> execute(['nombre' => $nombre, 'matricula' => $matricula, 'password' => $md5pass]);

        $query1 = $this->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matricula');
        //$query = $this->connect()->prepare('SELECT * FROM usuarios WHERE nombre = :nombre');
        $query1 ->execute(['matricula' => $matricula]);
        //$query ->execute(['nombre' => $nombre]);

        foreach ($query1 as $currentUser){
            $this->matricula = $currentUser['matricula'];
            $this->nombre = $currentUser['nombre'];
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
            echo  "<td>" . $row['nombre'] . "</td>";
            echo  "<td>" . $row['matricula'] . "</td>";
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