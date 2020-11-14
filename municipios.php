<?php session_start();

    require('conexion.php');

    $id=$_GET['id'];

    $statement = $conexion->prepare('SELECT * FROM municipio where id=:id LIMIT 1');
    $statement->execute(array(
        ':id' => $id
    ));    

    $municipio = $statement->fetch();

    require('views/municipios.view.php');
?>