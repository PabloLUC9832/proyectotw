<?php

include_once 'usuario_session.php';

$userSession = new UsuarioSession();
$userSession->closeSession();

header("location: ../views/inicio_de_Sesion.php");


?>