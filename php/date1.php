<?php
include("conexion.php");
$nombre = $_POST["nombre"];
$apellido_p = $_POST["apellido_p"];
$apellido_m = $_POST["apellido_m"];
$telefono = $_POST["telefono"];

$subir = "INSERT INTO `clientes` value(NULL, '$nombre', '$apellido_p', '$apellido_m', '$telefono', '----')";
mysqli_query($conexion, $subir);


$seleccion = "SELECT ID_cliente FROM clientes WHERE Telefono = $telefono;";
$datos = mysqli_fetch_array(mysqli_query($conexion, $seleccion));

    $aux = $datos["ID_cliente"];


$dia = $_POST["dia"];
$servicio = $_POST["servicio"];
$hora = $_POST["hora"];

$cita = "INSERT INTO `citas` value(NULL, '$aux', '----', '$servicio', '$dia', '$hora')";
mysqli_query($conexion, $cita);

$seleccion = "SELECT ID_cita FROM citas WHERE Dia = $dia & Hora = $hora & ID_cliente1 = $aux;";
$datoscita = mysqli_fetch_array(mysqli_query($conexion, $seleccion));

echo $datoscita["ID_cita"];
echo "<script>window.location.href ='../ajendada.php?';</script>";

?>