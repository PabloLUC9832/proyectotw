<?php

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

<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <title>Sistema de Préstamos UV | Home</title>
</head>
<body>
-->
    <!-- HEADER -->
    

    <!-- HEADER -->



<!-- </body>
</html>
 -->
