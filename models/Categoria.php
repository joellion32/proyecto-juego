<?php

class Categoria{

public $id;
public $nombre_categoria;
public $db;

public function __construct() {
$this->db = Database::conexion();
}

//METODOS GETTERS
public function getId(){
return $this->id;    
}

public function getNombre_Categoria(){
return $this->nombre;    
}

//METODOS SETTERS
public function setId($id){
$this->id = $id;   
}

public function setNombre_Catgoria($nombre){
$this->nombre = $this->db->mysql_real_escape_string($nombre);    
}

public function categoriasall(){
$categorias = $this->db->query("SELECT * FROM categorias ORDER BY id ASC");
return $categorias;
}

}//cierre de la clase