<?php

include_once 'solicitudesRegistro.php';
//include_once '../views/registro.php';
include_once 'usuario_session.php';


$solicituUsuario = new SolicitudesRegistro();
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
  
  if($solicituUsuario->insertarUser($matricula,$nombre,$password,$carrera,$correo,$rol)==false){
    $mensaje = "Ha ocurrido un error";
  }else{
    header("location: ../views/index.php");
    //$mensaje = "guardado";

  }
}


?>