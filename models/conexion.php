<?php

class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=proyecto_pets", "root","eNOmsWq_3Qt(C2[s",
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, 
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        return $link;
    }
}