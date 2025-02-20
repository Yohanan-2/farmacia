<?php
session_start();
if($_SESSION["s_nombre"] == null){
    echo "<script>window.location.href = '../acceder.html'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="css/logo.ico" type="image/x-icon">
    <title>Salud Medic</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/primary.css">
</head>
<body>
    

 

    
 