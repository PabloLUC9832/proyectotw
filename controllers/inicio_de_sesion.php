<?php

include_once 'usuario.php';
//include_once '../controllers/usuario_session.php';

$matricula = $_POST['matricula'];
$password = $_POST['password'];


$usuario = new Usuario();

//$_SESSION['usuario'] = $matricula;

//if($usuario->userExists($matricula,$password)){
/* 
    session_start();
    $_SESSION['usuario'] = $matricula;
    echo $_SESSION['usuario']; */

/*   }else{

    $errorLogin = "Matricula y/o contraseña incorrectos .";
    include_once '../views/inicio_de_sesion.php';
  } */

  if(!($usuario->userExists($matricula,$password))){ 
    $errorLogin = "Matricula y/o contraseña incorrectos .";
    include_once '../views/inicio_de_sesion.php';
  }/* else{
    $_SESSION['loggedin'] = true;
  } */

?>
