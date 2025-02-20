<?php
include("conexion.php");
$nombre = $_POST["nombre"];
$apellido_p = $_POST["apellido_p"];
$apellido_m = $_POST["apellido_m"];
$usuario = $_POST["usuario"];
$password = $_POST["password"]; 
$inc = md5($password);
$sucursal = $_POST["sucursal"];

$insertar = "INSERT INTO `usuario` value (NULL, '$nombre', '$apellido_p', '$apellido_m', '$usuario', '$inc', '$sucursal')";
$inicio = mysqli_query($conexion, $insertar);

header("Location:../index.php");
?>