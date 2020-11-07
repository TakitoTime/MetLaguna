<?php session_start();

    require('conexion.php');

    //if (isset($_SESSION['usuario'])) {
    //    header('Location: index.php');
    //    die();
    //}

    //if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //    $correo = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    //    $contra = $_POST['password'];
    //    $contra = hash('sha512', $contra);
//
    //    $errores='';
    //    
    //    $statement = $conexion->prepare('SELECT * FROM cuenta WHERE correo = :correo and password= :contra  LIMIT 1');
    //    $statement->execute(array(
    //        ':correo' => $correo,
    //        ':contra' => $contra,
    //    ));
//
    //    $resultado = $statement->fetch();
//
    //    if($resultado !=false){
    //        
    //        $_SESSION['usuario'] = $correo;
    //        
    //        $statement = $conexion->prepare('select * from cuenta as c inner join usuario as u on c.id=u.cuenta_id having c.id=:id');
    //        $statement->execute(array(
    //            ':id' => $resultado['id']
    //        ));
    //    
    //        $resultado=$statement->fetch();
//
    //        if($resultado != false){
    //            header('Location: perfil.php');   
    //        }
//
    //        header('Location: formularioRegistro.php');
//
    //    }else{
    //        $errores.='<li>Datos Incorrectos</li>';
    //    }   
                
        
    //}
    require('views/login.view.php');
?>