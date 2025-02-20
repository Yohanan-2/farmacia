<?php
include("php/conect.php");
$c = "SELECT * FROM usuario";

include("Herramientas.php");
$datos = mysqli_query($conexion, $c);

?>
<link rel="stylesheet" href="css/tabla.css">
</header>

    <a href="formularios/empleado.php" class="btn uno">nuevo</a> <br>
    <div class="table-responsive">
    <table class="table table-striped table-light table-hover">
        <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido paterno</th>
        <th scope="col">Apellido materno</th>
        <th scope="col">sucursal</th>
        <th scope="col">Herramientas</th>
    </tr>
        </thead>
        <tbody>
            <?php while ($dates = mysqli_fetch_array($datos)) {
                
             ?>
        <tr>
            <th scope="row"><?php echo $dates["ID"]; ?></th>
            <td><?php echo $dates["nombre"]; ?></td>
            <td><?php echo $dates["apellido_p"]; ?></td>
            <td><?php echo $dates["apellido_m"]; ?></td>
            <td><?php echo $dates["sucursal"]; ?></td>
            <td><a class="btn edit" href="formularios/editempleado.php?id=<?php echo $dates["ID"];?>">editar</a> <a class="btn borrar" href="#" onclick="borrar(<?php echo $dates['ID']; ?>)">borrar</a> <a class="btn ver" href="">Ver</a></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
        </div>
    
    <script src="js/cerrar.js"></script>
<script src="js/confirmacion.js"></script>
<script src="../javascript/sweetalert2.all.min.js"></script>
           
</body>
</html>