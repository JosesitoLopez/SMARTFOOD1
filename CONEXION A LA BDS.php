<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "proyecto_pec_506";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

if(!$conexion){
    die("Error de conexión: " . mysqli_connect_error());
} else {
    echo "conectado";
}
?>
