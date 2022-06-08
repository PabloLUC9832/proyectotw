<?php

include_once '../usuario.php';
include_once '../../views/autenticacion/registro.php';
include_once '../usuario_session.php';


$usuario = new Usuario();
$usuarioSession = new UsuarioSession();

$nombre = $_POST['nombre'];
$matricula = $_POST['matricula'];
$password = $_POST['password'];


$usuario->insertarUser($nombre,$matricula,$password);
//header("location: ../../views/index.php");

 if(isset($_POST['matricula']) && isset($_POST['password'])){
    //echo "validacion de login";
    $nombreForm = $_POST['nombre'];
    $matriculaForm = $_POST['matricula'];
    $passwordForm = $_POST['password'];
  
    if($usuario->userExists($matriculaForm,$passwordForm)){
      //echo "Usuario validado";
      $usuarioSession->setCurrentUser($matriculaForm);
      $usuario->setUser($matriculaForm);
  
      //include_once '../../views/home.php';
      //header ("location:../../views/home.php");
      header("location: ../../views/index.php");
    }
  
  
  } 

?>