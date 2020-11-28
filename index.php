<?php session_start();

    require('conexion.php');

    $pageActive='index';

    $statement = $conexion->prepare("SELECT M.id,M.nombre,M.estado,M.descripcion,F.url FROM municipio M inner join foto F On M.id=F.municipio_id where F.tipo='cardVertical' ");
    $statement->execute();    

    $municipios = $statement->fetchAll();

    $statement = $conexion->prepare("SELECT TL.*, F.url FROM tipolugar TL inner join foto F On TL.id=F.tipoLugar_id where F.tipo='cardHorizontal'");
    $statement->execute();    

    $tipoLugares = $statement->fetchAll();

    require('views/index.view.php');
?>