<?php
include("conect.php");
$usuario = $_GET["id"];
$fecha = $_POST["fecha"];
$codigo = $_POST["codigo"];
$sucursal = $_POST["sucursal"];
$selec = "SELECT * FROM usuario WHERE ID = $usuario";
$cont = mysqli_query($conexion, $selec);
$arre = mysqli_fetch_array($cont);
$suc = $arre["sucursal"];

$insertar = "INSERT INTO `traspaso` value (NULL, '$fecha', '$codigo', '3' , '$suc', '$sucursal', ' ')";
$in = mysqli_query($conexion, $insertar);
header("Location:../traspaso.php");
?>

   
