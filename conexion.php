<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="Rafael2508";
$dbname="registro";


$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
} else {
    echo "conectado";
}

?>
