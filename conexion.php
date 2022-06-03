<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpas = "";
    $dbname = "4114214_practica2";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpas,$dbname);

    if (!$conn) {
        # code...
        die("No hay conexion" .mysqli_connect_error());
    }
?>