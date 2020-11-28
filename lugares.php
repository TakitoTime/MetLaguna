<?php session_start();

    require('conexion.php');

    $pageActive='';

    $id=$_GET['id'];
    $nombre=$_GET['nombre'];

    $statement = $conexion->prepare("SELECT M.id,M.nombre,M.estado,M.descripcion,F.url FROM municipio M inner join foto F On M.id=F.municipio_id where F.tipo='cardVertical' ");
    $statement->execute(); 

    require('views/lugares.view.php');
?>