<?php

include_once 'config.php';

class Usuario extends DB{

    private $nombre;
    private $matricula;

    public function userExists($matricula,$password){
        $md5pass = md5($password);

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matricula AND password = :password');
        $query->execute(['matricula'=> $matricula, 'password' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }

    }

    public function setUser($matricula){
        
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matricula');
        $query ->execute(['matricula' => $matricula]);

        foreach ($query as $currentUser){
            $this->nombre = $currentUser['nombre'];
            $this->matricula = $currentUser['matricula'];
        }


    }

    public function getNombre(){
        return $this->nombre;
    }


}


?>