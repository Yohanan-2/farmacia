<?php
include("conect.php");
$id = $_GET["id"];
$num = $_GET["num"];
echo "$id & $num";
$actualizacion = "UPDATE traspaso SET confirmacion = '$id' WHERE ID_traspaso = '$num'";
                           
        mysqli_query($conexion, $actualizacion);
        header("Location:../traspaso.php");

?>