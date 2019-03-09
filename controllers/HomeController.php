<?php
require_once 'models/Usuario.php';
require_once 'models/Categoria.php';
require_once 'models/Juego.php';
class HomeController{


public function index(){
//mostrar todas las categorias    
$categoria = new Categoria();
$categorias = $categoria->categoriasall();
//mostrar todos los juegos
$juego = new Juegos();
$juegos = $juego->juegosall();

//mostrar destacados
$destacado = new Juegos();
$destacados = $destacado->juegosdestacados();

//mostrar mas reproducido
$reproducido = new Juegos();
$reproducidos = $reproducido->masreproducido();
require_once 'views/usuario/home.php';    
}    


public function registro(){
if(isset($_POST)){
$usuario = new Usuario();
$usuario->setNombre($_POST['nombre']); 
$usuario->setEmail($_POST['email']);    
$usuario->setPassword($_POST['password']); 
$usuarios = $usuario->registrar();
}

if($usuarios){
$_SESSION['mensaje'] = "Usuario Registrado";    
}

else{
$_SESSION['error'] = "Error al registrar usuario";    
}

header("location:" . base_url);
}//cierre de la funcion registrar


public function iniciar(){
if(isset($_POST)){
$usuario = new Usuario();
$usuario->setEmail($_POST['email']);
$usuario->setPassword($_POST['password']);

//indentificar usuarios
$identificar = $usuario->login();
}

// para guardar los datos del usuario el una session
if($identificar && is_object($identificar)){
$_SESSION['identificar'] = $identificar;    
}

//para verificar si el usuario es administrador
else if($identificar->rol == 'admin'){
$_SESSION['admin'] = true;
}

else{
$_SESSION['error'] = "error al iniciar sesion";    
}

header("location:" .base_url);   

} 


public function cerrarsession(){
Utils::sinpermiso();

if(isset($_SESSION['identificar'])){
session_unset();    
}   

if(isset($_SESSION['admin'])){
session_unset();    
}   

header("location:" .base_url);   
}

}//Cierre de la clase