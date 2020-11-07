<?php

    $servidor='localhost';
    $database='metlaguna';
    $user='root';
    $password='';

    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$database", $user, $password);
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }

?>