<?php

class Conexion{
    //protected static $conexion;
    private $host = "localhost";
    private $user = "root";
    private $pass = "Dragon97";
    private $base = "consultorio_juridico_unicah";

    public static function abriendoConexion(){
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=sistema_bancario;charset=UTF8","root","Dragon97");
            echo "si se pudo conectar";
        }catch (PDOException $exception) {
            echo  "no se pudo conectar" . $exception->getMessage();
        }
        return $conexion;

    }



}

