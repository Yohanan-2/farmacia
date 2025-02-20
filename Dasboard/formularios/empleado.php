<?php
include("Herramientas.php");
?>
<?php
include("../php/conect.php");

$sucursal = "SELECT * FROM tienda";
$conct = mysqli_query($conexion, $sucursal);
$ip = $_GET["id"];

$sucu = "SELECT sucursal FROM usuario WHERE ID = $ip";
$con = mysqli_query($conexion,$sucu);

?>
<form action="../php/alta_empleado.php?id=<?php echo $ip; ?>" enctype="multipart/form-data" method="post" class="form">
<h2 class="form_title">Traslado</h2>
<div class="form_contenedor">
<div class="form_grupo">
  
            <input type="date" name="fecha" id="fecha" class="form_input" placeholder=" ">
            <label for="fecha" class="form_label">fecha</label>
            <span class="form_line"></span>
          </div>
<div class="form_grupo">
            <input type="text" name="codigo" id="codigo" class="form_input" placeholder=" ">
            <label for="codigo" class="form_label">codigo</label>
            <span class="form_line"></span>
          </div>

          <div class="form_grupo">
            <!--<input type="text" name="sucursal" id="sucursal" class="form_input" placeholder=" ">-->
            <span class="form_line"></span>
            <select name="sucursal" id="sucursal" class="form_input">
            <?php
            
                while($tin = mysqli_fetch_array($conct)){
                 
                        ?>
                        
                    <option value="<?php echo $tin["ID_sucursal"];  ?>"><?php echo $tin["nombre1"]; ?></option>
                    <?PHP
                  
                }

                    ?>
         </select>
         <label for="sucursal" class="form_label">sucursal</label>
          </div>

<input type="submit"  class="form_submit" value="Siguiente">
</div>
</form>
<script src="../js/logica.js"></script>


</body>
</html>