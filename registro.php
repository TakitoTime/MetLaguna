<?php session_start();

    require('conexion.php');
    
    $pageActive='registro';

    if (isset($_SESSION['usuario'])) {
        header('Location: index.php');
        die();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $correo = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $contra = $_POST['password'];
        $contra2 = $_POST['password2'];

        $errores='';
        
        $statement = $conexion->prepare('SELECT * FROM cuenta WHERE correo = :correo LIMIT 1');
        $statement->execute(array(':correo' => $correo));

        $resultado = $statement->fetch();

        if ($resultado != false) {
            $errores .= '<li>La cuenta con este correo electronico ya existe</li>';
        }

        $contra = hash('sha512', $contra);
        $contra2 = hash('sha512', $contra2);

        if ($errores == '') {
            $statement = $conexion->prepare('insert into cuenta(correo, password, validacion) values (:correo,:contra, 0)');
            $statement->execute(array(
                    ':correo' => $correo,
                    ':contra' => $contra
                ));
            
            $statement = $conexion->prepare('SELECT id FROM cuenta ORDER by id DESC LIMIT 1');
            $statement->execute();

            $resultado = $statement->fetch();

            $_SESSION['id']=$resultado['id'];
            $_SESSION['usuario'] = $correo;
            $_SESSION['validacion'] = $resultado['validacion'];
        

            header('Location: formularioRegistro.php');
        }
    }
    require('views/registro.view.php');
?>