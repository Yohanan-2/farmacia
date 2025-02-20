<?php
session_start();
unset($_SESSION["s_nombre"]);
session_destroy();
header("Location:../../index.php");

?>