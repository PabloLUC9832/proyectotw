<?php
//https://youtu.be/Tb-_cEAsp4s
include_once '../backend/usuario.php';
include_once '../backend/usuario_session.php';

$usuarioSession = new UsuarioSession();
$usuario = new Usuario();

if(isset($_SESSION['usuario'])){
  //echo "hay sesion";
  $usuario->setUser($usuarioSession->getCurrentUser());
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
    include_once './autenticacion/inicio_de_sesion.php';
  }


}else{    
    //echo "login";
    include_once './autenticacion/inicio_de_sesion.php';
}

?>
