<?php session_start();

    error_reporting(0);
    header('Content-type: application/json; charset=utf-8');

    require('conexion.php');

    $id=$_GET['id'];

    $statement = $conexion->prepare("SELECT G.municipio_id, CT.* FROM gastronomia G inner join comidatipica CT on G.comidatipica_id=CT.id where G.municipio_id=:id");
    $statement->execute(array(
        ':id' => $id
    ));    

    $comidasTipicas = $statement->fetchAll();

    echo json_encode($comidasTipicas); 

?>