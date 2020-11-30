<?php
$servername ="localhost";
$username ="root";
$password = "12345678";

// Creacion de Conexion

$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Estado de conexion

if(!$conexion){

    die("Conexion fallida:". mysqli_connect_error());
}
echo"Conexión Satisfactoria";

// Creacion Base de Datos

$sql = "Creando Base de Datos bdunad03";
if(mysqli_query($conexion,$sql)){
    echo" Base de Datos Creada Satisfactoriamente";
}
else{
    echo"Error en crear base de datos ". mysqli_error($conexion);
}
mysqli_close($conexion)

?>