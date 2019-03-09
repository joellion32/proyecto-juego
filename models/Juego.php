<?php

class Juegos{

public $id;
public $nombre_juego;
public $usuario_id;
public $categoria_id;
public $descripcion;
public $comentario_autor;
public $imagen;
public $archivo;
public $fecha;
public $tag_id;
public $db;


public function __construct() {
$this->db = Database::conexion();
}

//METODOS GETTERS
public function getId(){
return $this->id;
}

public function getNombre_juego(){
return $this->nombre_juego;
}

public function getUsuario_id(){
return $this->usuario_id;
}

public function getCategoria_id(){
return $this->categoria_id;
}

public function getDescripcion(){
return $this->descripcion;
}

public function getComentario_autor(){
return $this->comentario_autor;
}

public function getImagen(){
return $this->imagen;
}

public function getArchivo(){
return $this->archivo;
}

public function getTag_Id(){
return $this->tag_id;
}


//METODOS SETTERS
public function setId($id){
$this->id = $id;
}

public function setNombre_juego($nombre_juego){
$this->nombre_juego = $nombre_juego;
}

public function setUsuario_id($usuario_id){
$this->usuario_id = $usuario_id;
}

public function setCategoria_id($categoria_id){
$this->categoria_id = $categoria_id;
}

public function setDescripcion($descripcion){
$this->descripcion = $descripcion;
}

public function setComentario_autor($comentario_autor){
$this->comentario_autor = $comentario_autor;
}

public function setImagen($imagen){
$this->imagen = $imagen;
}

public function setArchivo($archivo){
$this->archivo = $archivo;
}

public function setTag_Id($tag_id){
$this->tag_id = $tag_id;
}

//function mostrar todos los juegos
public function juegosall(){
$juegos = $this->db->query("SELECT * FROM juegos ORDER BY id DESC");
return $juegos;    
}
// juegos mas destacados
public function juegosdestacados(){
$destacados = $this->db->query("SELECT * FROM juegos WHERE estrellas = 5");
return $destacados;    
}

//mostrar el mas reproducido
public function masreproducido(){
$juegos = $this->db->query("SELECT juegos.*, categorias.nombre_categoria FROM juegos INNER JOIN categorias WHERE reproducciones >= 100 LIMIT 1");
return $juegos;    
}

//guardar reproducciones
public function reproducciones(){
$result= false;
$sql = "UPDATE juegos SET reproducciones = (reproducciones + 1) WHERE id= {$this->getId()}";
$reproduccion = $this->db->query($sql);
if($reproduccion){
$result = true;    
}

return $reproduccion;
}

//mostrar y reproducir juegos
public function mostrarjuegos(){
$sql = $this->db->query("SELECT juegos.*, categorias.*, tags.*, usuarios.* FROM juegos INNER JOIN categorias ON juegos.categoria_id = categorias.id INNER JOIN tags ON juegos.tag_id = tags.id 
INNER JOIN usuarios ON juegos.usuario_id = usuarios.id WHERE juegos.id={$this->getId()}");    
return $sql->fetch_object();
}

}//cierre de la clase