<?php
include("Herramientas.php");
include("../php/conect.php");
$id = $_GET["id"];
$usuario = "SELECT * FROM empleados WHERE ID_empleados = '$id'";
$datos = mysqli_query($conexion, $usuario);
$dates = mysqli_fetch_array($datos);
?>
<link rel="stylesheet" href="css/forms.css">
<form id="formlogin" class="form" action="../php/edit_empleado.php?id=<?php echo $id; ?>" enctype="multipart/form-data" method="post">
<div class="form_contenedor">
   
<div class="form_grupo">
<label for="nombre">Nombre</label><br>
<input type="text" name="nombre" id="nombre" required value="<?php echo $dates[1];  ?>"><br>
</div>

<div class="form_grupo">
<label for="apellido_p">Apellidos paterno</label><br>
<input type="text" name="apellido_p" id="apellido_p" required value="<?php echo $dates[2]; ?>"><br>
</div>

<div class="form_grupo">
<label for="apellido_m">Apellido materno</label><br>
<input type="text" name="apellido_m" id="apellido_m" required value="<?php echo $dates[3]; ?>"><br>
</div>

<div class="form_grupo">
<label for="INE">INE</label><br>
<input type="file" name="INE" id="INE" ><br>
<embed src="../INES/<?php echo $dates[5]; ?>" type="" width="346"><br>
</div>




<label for="Comprobante">Comprobante</label><br>
<input type="file" name="Comprobante" id="Comprobante"><br>
<embed src="../comprobante/<?php echo $dates[6]; ?>" type="application/pdf" width="346"><br>



<label for="telefono">telefono</label><br>
<input type="text" name="telefono" id="telefono" required value="<?php echo $dates[7];  ?>"><br>



<label for="Empleo">Empleos bacantes</label><br>
<select name="empleo" id="empleo">
    <?php 
        $empleo = $dates[8];
        $nom = "SELECT Nombre_empleo FROM empleo WHERE ID_empleo = '$empleo'";
        $nombre = mysqli_query($conexion, $nom);
            $arreglo = mysqli_fetch_array($nombre);
    ?>

    <option value="<?php echo $dates[8];?>"><?php echo $arreglo["Nombre_empleo"]; ?></option>

    <?php 
    $e = "SELECT ID_empleo, Nombre_empleo FROM empleo";
    $dat = mysqli_query($conexion, $e);

    while ($date = mysqli_fetch_array($dat)) {
     ?>
    <option value="<?php echo $date["ID_empleo"]; ?>"><?php echo $date["Nombre_empleo"]; ?></option>

    <?php
    }
    ?>
</select> 

<input type="submit" value="Siguiente">
 
</div>
</form>

<script src="../js/logica.js"></script>

</header>
</body>
</html>