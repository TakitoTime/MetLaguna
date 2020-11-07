<?php session_start();

    require('conexion.php');

    //if(!isset($_SESSION['usuario'])){
    //    header('Location: index.php');   
    //}
//
    //if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //    $nombre=$_POST['nombre'];
    //    $nombreUsuario=$_POST['nombreUsuario'];
    //    $paterno=$_POST['paterno'];
    //    $materno=$_POST['materno'];
    //    $ocupacion=$_POST['ocupacion'];
    //    $telfono=$_POST['telfono'];
    //    $edad=$_POST['edad'];
    //    $foto=$_POST['foto'];
//
    //    $errores='';
    //    
    //    $statement = $conexion->prepare('SELECT id FROM cuenta WHERE correo = :correo LIMIT 1');
    //    $statement->execute(array(
    //        ':correo' => $_SESSION['usuario']
    //    ));
//
    //    $resultado = $statement->fetch();
//
    //    $id=$resultado['id'];
//
    //    $statement = $conexion->prepare('INSERT INTO usuario(nombreUsuario, nombres, apellidoPaterno, apellidoMaterno, telefono, edad, foto, cuenta_id, ocupacion) 
    //                                                 values (:nombreUsuario, :nombre, :paterno, :materno, :telefono, :edad, :foto, :cuenta_id, :ocupacion)');
    //    $statement->execute(array(
    //        ':nombreUsuario' => $nombreUsuario,
    //        ':nombre' => $nombre,
    //        ':paterno' => $paterno,
    //        ':materno' => $materno,
    //        ':telefono' => $telefono,
    //        ':edad' => $edad,
    //        ':foto' => $foto,
    //        ':cuenta_id' => $id,
    //        ':ocupacion' => $ocupacion,
    //    ));
//
    //    $resultado = $statement->fetch();
    //   
    //    header('Location: perfil.php');   
    //            
    //    
    //}

    require('views/formularioRegistro.view.php');
?>