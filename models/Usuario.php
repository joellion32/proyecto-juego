<?php

class Usuario{

public $id;
public $nombre;
public $email;
public $password;
public $db;

public function __construct() {
$this->db = Database::conexion();
}


//METODOS GETTERS
public function getId(){
return $this->id;    
}

public function getNombre(){
return $this->nombre;    
}

public function getEmail(){
return $this->email;    
}

public function getPassword(){
return $this->password = password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
}


//METODOS SETTERS
public function setId($id){
$this->id = $id;    
}

public function setNombre($nombre){
$this->nombre = $this->db->real_escape_string($nombre);
}

public function setEmail($email){
$this->email =  $this->db->real_escape_string($email);    
}

public function setPassword($password){
$this->password =  $password;    
}

//funcion para registrar el usuario
public function registrar(){
$result = false;
$sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getEmail()}', '{$this->getPassword()}', 'usuario', CURDATE())";
$registrar = $this->db->query($sql);

if($registrar){
$result = true;    
}

return $registrar;
}

//para Iniciar Sesion
public function login(){
$result = false;  
$email = $this->email;
$password = $this->password;  
//comprobar si existe el usuario
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$login = $this->db->query($sql);

//comprobar si el usuario esta en la db
if($login && $login->num_rows == 1){
//meter los datos en un objeto o array    
$usuario = $login->fetch_object();

//verificar password
$verify = password_verify($password, $usuario->password);

if($verify){
$result = $usuario;
}

return $result;
}

}//cierre de la funcion login

}//cierre de la clase