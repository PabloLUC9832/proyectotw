<?php

include_once '../usuario.php';
include_once '../../views/autenticacion/registro.php';

$usuario = new Usuario();

$nombre = $_POST['nombre'];
$matricula = $_POST['matricula'];
$password = $_POST['password'];

$usuario->insertarUser($nombre,$matricula,$password);


?>