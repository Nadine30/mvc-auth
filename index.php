<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds . "Projectphp". $ds ;
$file = "{$base_dir}Controller{$ds}authController.php";
require $file;
$controller= new AuthController();

if ($_SERVER["REQUEST_URI"]=="/connexion"){
    $controller -> connexion();
   
}
elseif ($_SERVER["REQUEST_URI"]=="/inscription") {
    $controller -> inscription();
      
}
elseif ($_SERVER["REQUEST_URI"]=="/") {
    $controller -> Bienvenue();

}


?>