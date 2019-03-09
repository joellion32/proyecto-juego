<?php

class Database{
  
public function conexion(){
$conexion = new mysqli("localhost" , "root" , "" , "proyecto_juegos");
$conexion->query("SET NAMES utf8");
return $conexion;
}    

}