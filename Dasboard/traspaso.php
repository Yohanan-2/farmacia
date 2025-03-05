<?php
include("Herramientas.php");
include("php/conect.php");
$c = "SELECT * FROM traspaso";
$ip = $_SESSION["s_nombre"];

$datos = mysqli_query($conexion, $c);
$confirmacion = "SELECT sucursal FROM usuario WHERE ID = '$ip'";
$tr = mysqli_query($conexion, $confirmacion);
$list = mysqli_fetch_array($tr);
?>
<link rel="stylesheet" href="css/tabla.css">
</header>
    <a href="formularios/empleado.php?id=<?php echo $ip; ?>" class="btn uno">nuevo</a> <br>
    <div class="table-responsive">
    <table class="table table-striped table-light table-hover">
        <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">fecha</th>
        <th scope="col">Codigo</th>
        <th scope="col">usuario de entrega</th>
        <th scope="col">Salida</th>
        <th scope="col">Entrada</th>
        <th scope="col">Confirmacion</th>
    </tr>
        </thead>
        <tbody>
            <?php while ($dates = mysqli_fetch_array($datos)) {
                
             ?>
        <tr>
            <th scope="row"><?php echo $dates["ID_traspaso"]; ?></th>
            <td><?php echo $dates["fecha"]; ?></td>
            <td><?php echo $dates["codigo"]; ?></td>
            <td><?php

if($list["sucursal"] == $dates["sucursal_S"] & $dates["usuario"] == 3){?>

    <a class='btn edit' href="php/entregado.php?id=<?php echo $ip;?>&num=<?php echo $dates["ID_traspaso"] ?>">Entregado</a>
    <?php
    }else{
        $id = $dates["usuario"];
            $a = "SELECT ID, nombre FROM usuario WHERE ID = '$id'";
           $nombre = mysqli_query($conexion, $a);
           $nombres = mysqli_fetch_array($nombre);
           echo $nombres["nombre"];
    }
        
             ?></td>
            <td><?php
            $su = $dates["sucursal_S"];
            $b = "SELECT nombre1 FROM tienda WHERE ID_sucursal = '$su'";
            $sucursal = mysqli_query($conexion, $b);
            $sucursales = mysqli_fetch_array($sucursal);
            echo $sucursales["nombre1"]; 
            
            ?></td>
            <td><?php
            $su = $dates["sucursal_E"];
            $b = "SELECT nombre1 FROM tienda WHERE ID_sucursal = '$su'";
            $sucursal = mysqli_query($conexion, $b);
            $sucursales = mysqli_fetch_array($sucursal);
            echo $sucursales["nombre1"]; 
            ?></td>

            <td ><?php
            if($list["sucursal"] == $dates["sucursal_E"] & $dates["confirmacion"] == " "){?>
            <a class="btn edit boton">Confirmar</a>
            <?php
            }else{
                $id = $dates["confirmacion"];
              
                if($id != " "){
                $a = "SELECT ID, nombre FROM usuario WHERE ID = '$id'";
               $nombre = mysqli_query($conexion, $a);
               $nombres = mysqli_fetch_array($nombre);
               echo $nombres["nombre"];
                }else{
                        echo "";
                }
            }
            ?>
             
            </td>
        </tr>
        <?php
            }
        ?>
        </tbody>
        </table>
        </div>
        <form id="formlogin" action="" method="post">
        <section class="moda">
        <div class="modal_container">
                <h2 class="modal_title">Ingrese su contraseña</h2>
                <div class="input-group">
                <input type="password" class="form-control" placeholder="Usuario" aria-label="Recipient's username with two button addons">
                <input type="password" class="form-control" placeholder="Escriba su contraseña" aria-label="Recipient's username with two button addons">
                <button class="btn btn-outline-secondary" type="button">Confirmar</button>
                 <button class="btn btn-outline-secondary delete"  type="button">X</button>
                 
                </div>
        </div>
        </div>
        
    </section>
    </form>
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="js/cerrar.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="js/main.js"></script>
<script src="js/confirmacion.js"></script>
<script src="../javascript/sweetalert2.all.min.js"></script>
           
</body>
</html>