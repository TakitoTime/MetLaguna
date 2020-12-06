<?php session_start();

    require('conexion.php');
    
    $pageActive='';


    if(!isset($_SESSION['usuario'])){
        header('Location: index.php');   
    }

    if($_SESSION['validacion'] == 1){
        header('Location: perfil.php');   
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre=$_POST['nombre'];
        $nombreUsuario=$_POST['nombreUsuario'];
        $paterno=$_POST['paterno'];
        $materno=$_POST['materno'];
        $ocupacion=$_POST['ocupacion'];
        $telefono=$_POST['telefono'];
        $edad=$_POST['edad'];
        $foto="img/userPhoto/".$_POST['foto'];

        $errores='';

        $statement = $conexion->prepare('INSERT INTO usuario(nombreUsuario, nombres, apellidoPaterno, apellidoMaterno, telefono, edad, foto, cuenta_id, ocupacion) 
                                                     values (:nombreUsuario, :nombre, :paterno, :materno, :telefono, :edad, :foto, :cuenta_id, :ocupacion)');
        $statement->execute(array(
            ':nombreUsuario' => $nombreUsuario,
            ':nombre' => $nombre,
            ':paterno' => $paterno,
            ':materno' => $materno,
            ':telefono' => $telefono,
            ':edad' => $edad,
            ':foto' => $foto,
            ':cuenta_id' => $_SESSION['id'],
            ':ocupacion' => $ocupacion,
        ));

        $resultado = $statement->fetch();

        $statement = $conexion->prepare('UPDATE CUENTA SET VALIDACION=1 WHERE id=:id');
        $statement->execute(array(
            ':id' => $_SESSION['id'],
        ));

        $resultado = $statement->fetch();
       
        $_SESSION['validacion']=1;
        
        header('Location: perfil.php');   
                
        
    }

    require('views/formularioRegistro.view.php');
?>