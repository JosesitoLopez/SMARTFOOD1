<?php
// 🔹 Conexión a la base de datos
include("CONEXION A LA BDS.php");

// 🔹 Recibir datos del formulario
$control = $_POST['control'];   // Número de control
$curp = $_POST['curp'];         // CURP

// 🔹 INSERTAR DATOS EN LA BASE DE DATOS
$sql = "INSERT INTO proyecto_pec_506 (No_control, Curp)
        VALUES ('$control', '$curp')";

/*
  👉 nombre_de_tu_tabla  = AQUÍ VA EL NOMBRE DE TU TABLA
  👉 numero_control     = NOMBRE DE LA COLUMNA DEL CONTROL
  👉 curp               = NOMBRE DE LA COLUMNA DE LA CURP
*/

// 🔹 Ejecutar consulta
if(mysqli_query($conexion, $sql)){
    // Si se guarda correctamente
    header("Location: login.html");
}else{
    echo "Error al registrar: " . mysqli_error($conexion);
}
?>
