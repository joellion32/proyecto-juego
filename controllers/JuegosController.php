<?php
require_once 'models/Usuario.php';
require_once 'models/Categoria.php';
require_once 'models/Juego.php';

class JuegosController{

public function home(){
if(isset($_GET['id'])){
//actualizar reproduccion
$vista = new Juegos();
$vista->setId($_GET['id']);
$vistas = $vista->reproducciones();

//mostrar Juego
$juego = new Juegos();
$juego->setId($_GET['id']);
$juegos = $juego->mostrarjuegos();

// para guardar los datos del usuario el una session
if($juegos && is_object($juegos)){
$_SESSION['juegos'] = $juegos;    
}

require_once 'views/juegos/verjuegoflash.php';
}


}//cierre de la funcion




}//cierre de la clase