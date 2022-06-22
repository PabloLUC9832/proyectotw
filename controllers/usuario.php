<?php

include_once 'config.php';

class Usuario extends DB{

    private $nombre;

//----------------------- CHECAR SI EXISTE UN USUARIO EN LA BD -------------------------------
    public function userExists($matricula,$password){
        $md5pass = md5($password);

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE Matricula = :Matricula AND Pasword = :Pasword');

        $query->execute(['Matricula'=> $matricula, 'Pasword' => $md5pass]);


        $row = $query->fetch(PDO::FETCH_NUM);
        
        if ($row == true) {

            //se ingresa dentro de row, el numero de columa del campo, inicia desde 0
            $rol = $row[5];
            $nombre = $row[1];
            $_SESSION['rol'] = $rol;

            switch($_SESSION['rol'] = $rol){
                case 'Administrador':
                    echo "admin";
                    header('location: ../views/administrador/home.php');
                break;

                case 'Estudiante':
                    echo "estudiante";
                    header('location: ../views/estudiante/home.php');
                break;

                case 'Profesor';
                    echo "profesor";
                    header('location: ../views/profesor/home.php');
                break;

                default: 
                    header('location: ../views/anonimo/home.php');

            }

        }else{
            return false;
        }

    }

    public function setUser($matricula){
        
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matricula');
        $query ->execute(['matricula' => $matricula]);
        foreach ($query as $currentUser){
            $this->matricula = $currentUser['Matricula'];
            $this->nombre = $currentUser['NombreCompleto'];
        }


    }

// ---------------------------- INSERTAR UN USUARIO EN LA BD (USUARIO CON ACCESO AL SISTEMA) -------------------------------------------
    public function insertarUser($matricula,$nombreCompleto,$pasword,$carrera,$correo,$rol){
        $md5pass = md5($pasword);

        $query = $this->connect()->prepare('INSERT INTO usuarios (Matricula,NombreCompleto,Pasword,Carrera,Correo,Rol) VALUES (:Matricula,:NombreCompleto, :Pasword, :Carrera,:Correo,:Rol)');
        $query -> execute(['Matricula' => $matricula, 
        'NombreCompleto' => $nombreCompleto, 
        'Pasword' => $md5pass,
        'Carrera'=>$carrera,
        'Correo'=>$correo,
        'Rol'=>$rol
        ]);

         if($query){
            return true;
        }else{
            return false;
        } 
 
    }

    public function getNombre(){
        return $this->nombre ;
    }

// ------------------------ LISTAR LOS USUARIOS QUE ESTAN LA BD --------------------------------------
    public function listarUsuariosE(){

        $data = $this->connect()->prepare('SELECT * FROM usuarios');
        $data ->execute();
        
        foreach ($data as $row) {
            echo  "<tr>" ;
            echo  "<td>" . $row['Matricula'] . "</td>";
            echo  "<td>" . $row['NombreCompleto'] . "</td>";
            echo  "<td>" . $row['Pasword'] . "</td>";
            echo  "<td>" . $row['Carrera'] . "</td>";
            echo  "<td>" . $row['Correo'] . "</td>";
            echo  "<td>" . $row['Rol'] . "</td>";
            echo  "<td>" . '<a type="button" href="edit.php?matricula=' . $row['Matricula'] . '" class="btn btn-info">Editar</a>' . "</td>";
            echo  "<td>" . '<a type="button" href="delete.php?matricula=' . $row['Matricula'] . '" class="btn btn-danger">Eliminar</a>' . "</td>";
            echo  "</tr>" ;

        }

    }


    public function setMatricula($mmatricula){

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matricula');
        $query ->execute(['matricula' => $mmatricula]);
        $row = $query->fetch(PDO::FETCH_NUM);
        $matricula = $row[0];
        echo $matricula;
    }

    public function setNombre($mmatricula){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matricula');
        $query ->execute(['matricula' => $mmatricula]);
        $row = $query->fetch(PDO::FETCH_NUM);
        $nombre = $row[1];
        echo $nombre;
    }

    public function setCarrera($mmatricula){

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matricula');
        $query ->execute(['matricula' => $mmatricula]);
        $row = $query->fetch(PDO::FETCH_NUM);
        $carrera = $row[3];
        echo $carrera;
    }

    public function setCorreo($mmatricula){

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matricula');
        $query ->execute(['matricula' => $mmatricula]);
        $row = $query->fetch(PDO::FETCH_NUM);
        $correo = $row[4];
        echo $correo;
    }

    public function setRol($mmatricula){

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matricula');
        $query ->execute(['matricula' => $mmatricula]);
        $row = $query->fetch(PDO::FETCH_NUM);
        $rol = $row[5]; 
        echo $rol;
    }

    public function setAtributos($mmatricula) : array {

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matricula');
        $query ->execute(['matricula' => $mmatricula]);
        $row = $query->fetch(PDO::FETCH_NUM);
        $matricula = $row[0];
        $nombre = $row[1];
        $carrera = $row[3];
        $correo = $row[4];
        $rol = $row[5];

        return [$matricula,$nombre,$carrera,$correo,$rol];

    }

// -------------------------- ACTUALIZAR DATOS DE UN USUARIO ESPECIFICO --------------------------------
    public function actualizar($Matricula,$NombreCompleto,$Carrera,$Correo,$Rol){

        $query = $this->connect()->prepare("UPDATE usuarios SET NombreCompleto='$NombreCompleto',Carrera='$Carrera',Correo='$Correo',Rol='$Rol' WHERE Matricula='$Matricula'");
        $query-> execute();
        if($query){
            echo true;
        }else{
            echo false;
        }

    }

// --------------------------- ELIMINAR UN USUARIO ESPECIFICO DE LA BD ----------------------------------------
    public function eliminar($Matricula){

        $query = $this->connect()->prepare("DELETE FROM usuarios WHERE Matricula='$Matricula'");
        $query-> execute();
        if($query){
            echo true;
        }else{
            echo false;
        }

    }
    
// --------------------------- INSERTAR REGISTRO SOLICITUD USUARIO (USUARIO SIN ACCESO AL SISTEMA TODAVIA) -----------------------
    public function insertarSolicitudUsuario($matricula,$nombreCompleto,$pasword,$carrera,$correo,$rol){
        $md5pass = md5($pasword);

        $query = $this->connect()->prepare('INSERT INTO solicitudesregistro (Matricula,NombreCompleto,Pasword,Carrera,Correo,Rol) VALUES (:Matricula,:NombreCompleto, :Pasword, :Carrera,:Correo,:Rol)');
        $query -> execute(['Matricula' => $matricula, 
        'NombreCompleto' => $nombreCompleto, 
        'Pasword' => $md5pass,
        'Carrera'=>$carrera,
        'Correo'=>$correo,
        'Rol'=>$rol
        ]);

         if($query){
            return true;
        }else{
            return false;
        } 
 
    }
  
// --------------------------- LISTAR NOMBRES DE USUARIOS -----------------------
public function matriculaUsuarios(){

    $data = $this->connect()->prepare('SELECT * FROM usuarios ORDER BY NombreCompleto ASC');
    $data ->execute();

    foreach ($data as $row) {
        echo  "<option value='". $row['Matricula'] . "'>" . $row['Matricula'] . "</option>";

    }

}

}


?>