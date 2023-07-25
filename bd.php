<?php

    $dbname= "app";
    $servidor="localhost";
    $user="root";
    $password="";

try {

    
    $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $user, $password);

    

    $dbh = new PDO($dsn,);

} catch (PDOException $e){

    echo $e->getMessage();

} 