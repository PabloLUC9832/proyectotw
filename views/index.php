<?php
//https://youtu.be/Tb-_cEAsp4s
include_once '../controllers/usuario.php';
include_once '../controllers/usuario_session.php';

$usuarioSession = new UsuarioSession();
$usuario = new Usuario();

if(isset($_SESSION['usuario'])){
  //echo "hay sesion  {$_SESSION['usuario']}";
  $usuario->setUser($usuarioSession->getCurrentUser());
  echo "hay sesion  {$_SESSION['usuario']} ". $usuario->getNombre();

  $var = "{$_SESSION['usuario']}";

  include_once './home.php';
  
}else if(isset($_POST['matricula']) && isset($_POST['password'])){
  //echo "validacion de login";
  $matriculaForm = $_POST['matricula'];
  $passwordForm = $_POST['password'];

  if($usuario->userExists($matriculaForm,$passwordForm)){
    //echo "Usuario validado";
    $usuarioSession->setCurrentUser($matriculaForm);
    $usuario->setUser($matriculaForm);

    include_once './home.php';

  }else{
    //echo "error";
    $errorLogin = "Matricula y/o contraseña incorrectos .";
    include_once './inicio_de_sesion.php';
  }


}else{    
    //echo "login";
    include_once './inicio_de_sesion.php';
}

?>
