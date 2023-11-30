<?php
session_start();
include "conexion.php";
$Usuario = $_POST['usuario'];
$Nombre = $_POST['nombre_completo'];
$Telefono = $_POST['telefono'];
$Correo = $_POST['correo'];
$Contraseña = $_POST['contraseña'];

$q = "SELECT COUNT(*) AS contar FROM usuarios WHERE usuario= '$Usuario' AND contraseña = '$Contraseña'";

$consulta = mysqli_query($conexion,$q);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['usermane']=$Usuario;
    echo "Ingresaste";
    header("location: ./dashboard.php");
}else{

        header("location: ./respuesta.php");

echo "error";
   
}

?>