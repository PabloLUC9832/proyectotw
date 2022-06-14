<?php

include_once 'config.php';

class SolicitudesRegistro extends DB{

    //-------------------- INSERTAR UN NUEVA SOLICITUD DE REGISTRO DE UN USUARIO ------------------------------------------------------
    public function insertarUser($matricula,$nombreCompleto,$pasword,$carrera,$correo,$rol){
        $md5pass = md5($pasword);

        $query = $this->connect()->prepare('INSERT INTO solicitudesregistro (Matricula,NombreCompleto,Pasword,Carrera,Correo,Rol) VALUES (:Matricula,:NombreCompleto, :Pasword, :Carrera,:Correo,:Rol)');
        $query -> execute(['Matricula' => $matricula, 
        'NombreCompleto' => $nombreCompleto, 
        'Pasword' => $md5pass,
        'Carrera'=>$carrera,
        'Correo'=>$correo,
        'Rol'=>$rol
        ]);

        $query1 = $this->connect()->prepare('SELECT * FROM solicitudesregistro WHERE Matricula = :Matricula');
        //$query = $this->connect()->prepare('SELECT * FROM usuarios WHERE nombre = :nombre');
        $query1 ->execute(['Matricula' => $matricula]);
        //$query ->execute(['nombre' => $nombre]);

        foreach ($query1 as $currentUser){
            $this->matricula = $currentUser['Matricula'];
            $this->nombre = $currentUser['NombreCompleto'];
        }        

         if($query){
            return true;
        }else{
            return false;
        } 
 
    }


    //--------------------- LISTA DE USUARIOS QUE DESEAN REGISTRARSE EN AL BASE DATOS ORIGINAL PARA TENER ACCESO A PRESTAMOS Y AL SISTEMA  ------------------------------------
    public function listarSolicitudesUsuarios(){

        $nombre = "";
        $matricula = "";

        $data = $this->connect()->prepare('SELECT * FROM solicitudesregistro');
        $data ->execute();
        // and somewhere later:
        foreach ($data as $row) {
            echo  "<tr>" ;

            echo "<td><a href='../views/modificarUsuario.php?matricula= ". $row['Matricula'] ."' class='btn btn-warning btn-sm'>Editar</a></td>";

            echo  "<td>" . $row['Matricula'] . "</td>";
            echo  "<td>" . $row['NombreCompleto'] . "</td>";
            echo  "<td>" . $row['Pasword'] . "</td>";
            echo  "<td>" . $row['Carrera'] . "</td>";
            echo  "<td>" . $row['Correo'] . "</td>";
            echo  "<td>" . $row['Rol'] . "</td>";
            echo  "</tr>" ;

        }

    }

    public function listarUsuarios2(){

        $nombre = "";
        $matricula = "";

        $data = $this->connect()->prepare('SELECT * FROM usuarios');
        $data ->execute();
        // and somewhere later:
        foreach ($data as $row) {
            //echo  $row['matricula'];
            echo  "<td>" . $row['matricula'] . "</td>";;
        }

    }



}


?>