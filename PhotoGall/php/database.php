<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "photogall";

    try {
        $conn = new PDO("mysql:host=$server;dbname=$photogall;$user, $password")
    } catch (PDOException $e) {
        die("Conexión fallida:" .$e->getMessage());
    }


?>