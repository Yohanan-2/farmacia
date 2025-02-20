<?php 
session_start();

include_once 'bd.php';
include_once 'conexion.php';
$objet = new Conexion();
$connect = $objet->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

$encriptacion = md5($password);



/*$nombre = $_POST["nombre"];
$password = $_POST["password"];
*/
$usuario = "SELECT * FROM usuario WHERE usuario = '$nombre' && password = '$encriptacion'";

$red = $connect->prepare($usuario);
$red->execute();



if ($red->rowCount() >= 1){
    $data = $red->fetchAll(PDO::FETCH_ASSOC);
    
$datos = mysqli_query($conexion, $usuario);
$dates = mysqli_fetch_array($datos);
$id = $dates["ID"];
    $_SESSION["s_nombre"] = $id;
}else{
    $_SESSION["s_nombre"] = null;
    $data = null;
}
print json_encode($data);
$connect = null;
?>