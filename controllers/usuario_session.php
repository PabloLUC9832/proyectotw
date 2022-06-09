<?php

class UsuarioSession{

    public function __construct(){
        session_start();
    }
    
    public function setCurrentUser($usuario){
        $_SESSION['usuario'] = $usuario;
    }

    public function getCurrentUser(){
        $_SESSION['usuario'];
        //$_SESSION['nombre'];
        //$_SESSION['matricula'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
        session_write_close();
    }


}


?>