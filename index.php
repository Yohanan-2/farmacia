<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salud Medica</title>
    <link rel="stylesheet" href="css/primary.css">
    <link rel="shortcut icon" href="imagenes/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/sweetalert2.css">
</head>
<body>
<?php
$encriptado = md5('mitzy1');
echo $encriptado;
?>
<form id="formlogin" action="" method="post" class="form">
      <h1>Salud medica</h1>
      <hr>
      <h2 class="form_title">Iniciar sesion</h2>
      <div class="form_contenedor">
          <div class="form_grupo">
            <input type="text" name="nombre" id="nombre" class="form_input" placeholder=" ">
            <label for="nombre" class="form_label">usuario</label>
            <span class="form_line"></span>
          </div>
          <div class="form_grupo">
            <input type="password" name="password" id="password"  class="form_input" placeholder=" "> 
            <label for="password" class="form_label">Contraseña</label>
            <span class="form_line"></span>
          </div>
          
          <input type="submit" name="submit" class="form_submit" value="Iniciar">
          <div class="caja">
            <a href="nuevo.php" class="btn button-red">Registro</a>
          </div>
          
      </div>
    
    </form>
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="javascript/sweetalert2.all.min.js"></script>
    <script src="conexion.js"></script>
</body>
</html>