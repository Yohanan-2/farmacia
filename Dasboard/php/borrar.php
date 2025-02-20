<?php
include("conect.php");
$usuario = $_GET["usuario"];

$select = "SELECT * FROM empleados WHERE ID_empleados = $usuario";
$conectar = mysqli_query($conexion, $select);

$datos = mysqli_fetch_array($conectar);
$aux = $datos["INE"];
$aux1 = $datos["Com_Dom"];

$archivos = unlink("../INES/$aux");
$archivos1 = unlink("../comprobante/$aux1");

if($archivos && $archivos1){
$borrar = "DELETE FROM empleados WHERE ID_empleados = '$usuario'";
 mysqli_query($conexion, $borrar);
 header("Location:../empleados.php");
}
?>