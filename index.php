<?php session_start();

    require('conexion.php');

    $statement = $conexion->prepare('SELECT * FROM municipio  LIMIT 4');
    $statement->execute();    

    $municipios = $statement->fetchAll();

    require('views/index.view.php');
?>