<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/emergente.css">
</head>
<body>
 

<?php
include("conect.php");
$id = $_GET["id"];

$nombre = $_POST["nombre"];
$apellido_p = $_POST["apellido_p"];
$apellido_m = $_POST["apellido_m"];
$telefono = $_POST["telefono"];

$nombre1 = $_POST["nombre1"];
$apellido_m1 = $_POST["apellido_m1"];
$apellido_p1 = $_POST["apellido_p1"];
$telefono1 = $_POST["telefono1"];

$archivouno = $_FILES["referencias"]["name"];
$archivodos = $_FILES["recomendacion"]["name"];
//ruta de la carpeta 
$rutauno = "../Referencias/";
$rutados = "../recomendaciones/";
//direccion de archivos
$direccion1 = $rutauno.$_FILES["referencias"]["name"];
$direccion2 = $rutados.$_FILES["recomendacion"]["name"];
//guardamos en la bd
$altauno = "INSERT INTO `recomendacion` value (NULL, '$nombre1', '$apellido_p1', '$apellido_m1', '$telefono1', '$archivodos', '$id')";
$alta = "INSERT INTO `referencias` value (NULL, '$nombre', '$apellido_p', '$apellido_m', '$telefono', '$archivouno', '$id')";
echo $alta;
//direecion del archivo
$comprobacion1 = @move_uploaded_file($_FILES["referencias"]["tmp_name"], $direccion1);
$comprobacion2 = @move_uploaded_file($_FILES["recomendacion"]["tmp_name"], $direccion2);
//comprobamos que los archivos se movieron
if($comprobacion1 && $comprobacion2){
    mysqli_query($conexion, $altauno);
    mysqli_query($conexion, $alta);
    
?>
 <div class="contenedor-modal">
    <div class="contener-modal">
        <h2>Los archivos se guardaron</h2>
        <p>Finalizo el formulario</p>
        <div class="btn-cerrar">
            <label for="btn-modal"><a href="../empleados.php">Cerrar</a></label>
        </div>
    </div>
 </div>
<?php
}else{

}

?>

   
</body>
</html>