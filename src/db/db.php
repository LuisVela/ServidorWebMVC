<?php
class Connect{
    public static function connection(){
        //Datos de la conexión e instancia de esta.
        $connection=new mysqli("unir.cu994aa8ughi.us-east-1.rds.amazonaws.com", "admin", "admin123", "servicioweb");
        $connection->query("SET NAMES 'utf8'");
        return $connection;
    }
}
