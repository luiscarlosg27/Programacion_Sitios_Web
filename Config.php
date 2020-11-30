<?php
$servername ="localhost";
$username ="root";
$password = "12345678";
$dbname ="bdunad03";

// Creacion de Conexion

$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Estado de conexion

if(!$conexion){

    die("Conexion fallida:". mysqli_connect_error());
}
echo"Conexión Satisfactoria";
?> 
