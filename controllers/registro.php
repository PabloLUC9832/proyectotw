<?php

include_once 'usuario.php';
//include_once '../views/registro.php';
include_once 'usuario_session.php';


$usuario = new Usuario();
$usuarioSession = new UsuarioSession();

/* $nombre = $_POST['nombre'];
$matricula = $_POST['matricula'];
$password = $_POST['password']; */


if((isset($_POST['NombreCompleto']) && isset($_POST['Matricula']) && isset($_POST['Carrera']) && isset($_POST['Correo']) && isset($_POST['Rol'])
&& isset($_POST['Pasword']) 

)==false){
  $mensaje = "Ingresa los datos solicitados .";
  include_once '../views/registro.php';
}else{
  $nombre = $_POST['NombreCompleto'];
  $matricula = $_POST['Matricula'];
  $carrera = $_POST['Carrera'];
  $correo = $_POST['Correo'];
  $rol = $_POST['Rol'];
  $password = $_POST['Pasword'];
  
  if($usuario->insertarUser($matricula,$nombre,$password,$carrera,$correo,$rol)==false){
    $mensaje = "Ha ocurrido un error";
  }else{
    header("location: ../views/index.php");
    //$mensaje = "guardado";

  }
}


/* $usuario->insertarUser($nombre,$matricula,$password);
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
      header("location: ../views/index.php");
    }
  
  
  }  */

?>