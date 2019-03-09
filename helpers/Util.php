<?php

class Utils{

//para borrar las secciones
public static function deletesession($name){
if(isset($_SESSION[$name])){
$_SESSION[$name] = null;
}

return $name;
}

//para devolver si intenta entrar por url
public static function sinpermiso(){
if(!isset($_SESSION['identificar'])){
header("location:" . base_url);
}    
}


}