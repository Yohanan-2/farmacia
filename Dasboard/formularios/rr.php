<?php
include("herramientas.php");
$id = $_GET["id"];

?>
<br><br>
    <form action="../php/alta_archivo.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
        <legend>Referencia</legend>
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="apellido_p">Apellido paterno</label><br>
        <input type="text" name="apellido_p" id="apellido_p"><br>
        <label for="apellido_m">Apellido materno</label><br>
        <input type="text" name="apellido_m" id="apellido_m"><br>
        <label for="telefono">Telefono</label><br>
        <input type="text" name="telefono" id="telefono"><br>
        <label for="Referencias">Referencias/PDF</label> <br>
        <input type="file" name="referencias" id="referencias"><br> <br><br>
        <legend>Recomendacion</legend>
        <label for="nombre1">Nombre de la persona o empresa</label><br>
        <input type="text" name="nombre1" id="nombre1"><br>
        <label for="apellido_p1">Apellido paterno</label><br>
        <input type="text" name="apellido_p1" id="apellido_p1"><br>
        <label for="apellido_m1">Apellido materno</label><br>
        <input type="text" name="apellido_m1" id="apellido_m1"><br>
        <label for="telefono1">Telefono</label><br>
        <input type="text" name="telefono1" id="telefono1"><br>
        <label for="recomendacion">Recomendacion/PDF</label><br>
        <input type="file" name="recomendacion" id="recomendacion"><br><br>

        <input type="submit" value="Enviar">
    </form>
    <script src="../js/cerrar.js"></script>
     <script src="../php/javascript/sweetalert2.all.min.js"></script>
</body>
</html>