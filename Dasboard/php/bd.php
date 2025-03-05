<?php
class Conexion{
    public static function Conectar(){
        define('servidor','localhost');
        define('nombre_bd','farmacia');
        define('usuario','root');
        define('password','');
        $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try{
            $conect = new PDO("mysql:host=".servidor.";dbname=".nombre_bd, usuario, password, $option);
            return $conect;
        }catch(Exception $e){
            die("El error de conexion es:".$e->getMessage());
        }
    }
}

?>