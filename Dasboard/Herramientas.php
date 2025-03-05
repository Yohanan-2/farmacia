<?php
session_start();
if($_SESSION["s_nombre"] == null){
   echo "<script>window.location.href = '../inicio.html'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salud Medic</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="shortcut icon" href="css/logo.ico" type="image/x-icon">
    <style>
        *{
    margin: 0;
    box-sizing: border-box;
}

  body{
    font-family: 'Zilla Slab', serif;
  }
    </style>
</head>
<body>
    <header class="hero">
        <nav class="nav container" id="nav">
        <img class="nav_logo" src="css/logos.png">
        <ul class="nav_links">
            
        <li class="nav_item"><a href="traspaso.php" class="nav_link">Traspasos</a></li>
        <li class="nav_item"><a href="#" class="nav_link">Cotizacion</a></li>
        <li class="nav_item"><a href="#" class="nav_link">Inventario</a></li>
        <li class="nav_item"><a href="empleados.php" class="nav_link">Compañeros</a></li>
        <li onclick="cerrar()" class="nav_item"><a href="#" class="nav_link">Cerrar</a></li>
    </ul>

    <a href="#nav" class="nav_hamburguer">
        <img src="css/menu.svg" class="nav_icon">
    </a>
    <a href="#" class="nav_close">
        <img src="css/close.svg" class="nav_icon">
    </a>
        </nav>
        

 

    
 