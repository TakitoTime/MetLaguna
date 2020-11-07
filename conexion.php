<?php
    //servidor Local
    //$servidor='localhost';
    //$database='metlaguna';
    //$user='root';
    //$password='';

    //servidor Produccion
    $servidor='us-cdbr-east-02.cleardb.com';
    $database='heroku_bea46eece95d4b9';
    $user='b6a45695b276ae';
    $password='a3715005';
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$database", $user, $password);
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }

?>