<?php session_start();

    require('conexion.php');

    if (isset($_SESSION['usuario'])) {
        header('Location: index.php');
        die();
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $correo = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $contra = $_POST['password'];
        $contra = hash('sha512', $contra);
        $errores='';
        
        $statement = $conexion->prepare('SELECT * FROM cuenta WHERE correo = :correo and password= :contra  LIMIT 1');
        $statement->execute(array(
            ':correo' => $correo,
            ':contra' => $contra,
        ));

        $resultado = $statement->fetch();

        if($resultado !=false){
            
            $_SESSION['usuario'] = $correo;
            $_SESSION['id'] = $resultado['id'];
            $_SESSION['validacion'] = $resultado['validacion'];
            
            if($resultado['validacion'] == 1){
                header("Location: perfil.php");
            }else{
                header("Location: formularioRegistro.php");
            }
        }else{
            $errores.='<li>Datos Incorrectos</li>';
        }   
        
    }

    require('views/login.view.php');
?>