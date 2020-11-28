<?php session_start();

    require('conexion.php');

    $pageActive='';

    $id=$_GET['id'];

    $statement = $conexion->prepare("SELECT  M.*, F.url FROM municipio M inner join foto F On M.id=F.municipio_id where M.id=:id and F.tipo='banner' LIMIT 1");
    $statement->execute(array(
        ':id' => $id
    ));    

    $municipio = $statement->fetch();

    $statement = $conexion->prepare("SELECT TL.*, F.url FROM tipolugar TL inner join foto F On TL.id=F.tipoLugar_id where F.tipo='cardHorizontal'");
    $statement->execute();    

    $tipoLugares = $statement->fetchAll();

    require('views/municipios.view.php');
?>