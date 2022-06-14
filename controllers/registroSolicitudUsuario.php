<?php

include_once 'usuario.php';
//include_once '../views/registro.php';
//include_once 'usuario_session.php';


$usuario = new Usuario();
//$usuarioSession = new UsuarioSession();


if((isset($_POST['NombreCompleto']) && isset($_POST['Matricula']) && isset($_POST['Carrera']) && isset($_POST['Correo']) && isset($_POST['Rol'])
&& isset($_POST['Pasword']) 

)==false){
  include_once '../views/registroSolicitudUsuario.php';
}else{
  $nombre = $_POST['NombreCompleto'];
  $matricula = $_POST['Matricula'];
  $carrera = $_POST['Carrera'];
  $correo = $_POST['Correo'];
  $rol = $_POST['Rol'];
  $password = $_POST['Pasword'];
  
  if($usuario->insertarSolicitudUsuario($matricula,$nombre,$password,$carrera,$correo,$rol)==false){
    $mensaje = "Ha ocurrido un error";
  }else{
    header("location: ../views/inicio_de_sesion.php");

  }
}


?>