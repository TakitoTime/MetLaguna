<?php session_start();

    require('conexion.php');

    if(!isset($_SESSION['usuario'])){
        header('Location: registro.php');
    }
    else{
        if($_SESSION['validacion'] != 1){
            header('Location: formularioRegistro.php');
        }
        else{
            $abrir_modal="false";

            $errores='';
            
            $statement = $conexion->prepare('SELECT * FROM usuario WHERE cuenta_id = :id LIMIT 1');
            $statement->execute(array(':id' => $_SESSION['id']));
        
            $usuario = $statement->fetch();
        
            $nombre = $usuario['nombres']." ".$usuario['apellidoPaterno']." ".$usuario['apellidoMaterno'];
        
            if(isset($_POST['actualizarUsuario'])){
        
                $id = trim($_POST["usuarioId"]);
                $id = filter_var($id, FILTER_SANITIZE_STRING);
        
                $nombre = trim($_POST["nombre"]);
                $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        
                $nombreUsuario = trim($_POST["nombreUsuario"]);
                $nombreUsuario = filter_var($nombreUsuario, FILTER_SANITIZE_STRING);
        
                $paterno = trim($_POST["paterno"]);
                $paterno = filter_var($paterno, FILTER_SANITIZE_STRING);
                
                $materno = trim($_POST["materno"]);
                $materno = filter_var($materno, FILTER_SANITIZE_STRING);
        
                $telefono = trim($_POST["telefono"]);
                $telefono = filter_var($telefono, FILTER_SANITIZE_STRING);
        
                $edad = trim($_POST["edad"]);
                $edad = filter_var($edad, FILTER_SANITIZE_STRING);
        
                $ocupacion = trim($_POST["ocupacion"]);
                $ocupacion = filter_var($ocupacion, FILTER_SANITIZE_STRING);
        
                $target_path="img/userPhoto/";
                $target_path=$target_path . basename( $_FILES['foto']['name']);
                if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_path)){
                    $errores.= "<li>el archivo". basename($_FILES['foto']['name'])."ha sido subido</li>";
                }
                else{
                    $errores.="<li>Ha ocurrido un error, trate de nuevo!</li>";
                }
                $foto=$target_path;
        
                $statement = $conexion->prepare('SELECT * FROM usuario WHERE nombreUsuario = :nombreUsuario LIMIT 1');
                $statement->execute(array(
                    ':nombreUsuario' => $nombreUsuario,
                ));
        
                $resultado = $statement->fetch();
        
                echo $id;

                if($resultado !=[]){
                    
                    $statement = $conexion->prepare('UPDATE usuario SET nombres = :nombres, 
                                                                    apellidoPaterno = :paterno, 
                                                                    apellidoMaterno = :materno,
                                                                    nombreUsuario = :nombreUsuario,
                                                                    telefono = :telefono,
                                                                    edad = :edad,
                                                                    ocupacion = :ocupacion,
                                                                    foto = :foto,
                                                                    WHERE id = :id');
                
                
                    $statement->execute(
                        array(
                            ':nombres' => $nombre,
                            ':paterno' => $paterno,
                            ':materno' => $materno,
                            ':nombreUsuario' => $nombreUsuario,
                            ':telefono' => $telefono,
                            ':edad' => $edad,
                            ':ocupacion' => $ocupacion,
                            ':foto' => $foto,
                            ':id' => $id
                        )
                    );
        
                    $resultado = $statement->fetch();
                    
                    $errores.='<li>Datos Actualizados Correctamente</li>';
                    $abrir_modal="true";
        
                }else{
                    $errores.='<li>El Nombre de Usuario ya esta ocupado</li>';
                    $abrir_modal="true";
                }   
            
            }
        
            if(isset($_POST['actualizarPasswords'])){
                
            }
        }
    }

    require('views/modalPassword.view.php');
    require('views/modalUser.view.php');
    require('views/perfil.view.php');   
?>