<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salud Medica</title>
    <link rel="stylesheet" href="css/primary.css">
    <link rel="shortcut icon" href="imagenes/logo.ico" type="image/x-icon">
</head>
<body>

<form id="formlogin" action="php/recoger.php" method="post" class="form">
      <h1>Salud medica</h1>
      <hr>
      <h2 class="form_title">Registro</h2>
      <div class="form_contenedor">
          <div class="form_grupo">
            <input type="text" name="nombre" id="nombre" class="form_input" placeholder=" " require>
            <label for="nombre" class="form_label">Nombre</label>
            <span class="form_line"></span>
          </div>

          <div class="form_grupo">
            <input type="text" name="apellido_p" id="apellido_p" class="form_input"  placeholder=" " require>
            <label for="apellido_p" class="form_label">Apellido Paterno</label>
            <span class="form_line"></span>
          </div>
          <div class="form_grupo">
            <input type="text" name="apellido_m" id="apellido_m" class="form_input"  placeholder=" " require>
            <label for="apellido_m" class="form_label">Apellido Materno</label>
            <span class="form_line"></span>
          </div>

          <div class="form_grupo">
            <input type="text" name="usuario" id="usuario" class="form_input"  placeholder=" " require>
            <label for="usuario" class="form_label">usuario</label>
            <span class="form_line"></span>
          </div>

          <div class="form_grupo">
            <input type="password" name="password" id="password"  class="form_input"  placeholder=" " require> 
            <label for="password" class="form_label">Contraseña</label>
            <span class="form_line"></span>
          </div>

          <div class="form_grupo">
            <select name="sucursal" id="sucursal" class="form_input"  placeholder=" ">
                <option style="color:#0000" value="1">H1</option>
                <option value="2">H2</option>
                <option value="3">Terminal</option>
                <option value="4">Xaloztoc</option>
                
            </select>
            <label for="nombre" class="form_label">Sucursal</label>
            <span class="form_line"></span>
          </div>
          
          <input type="submit" name="submit" class="form_submit" value="Iniciar">
          <div class="caja">
            <a href="index.php" class="btn button-red">Volver</a>
          </div>
          
      </div>
    
    </form>
</body>
</html>