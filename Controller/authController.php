<?php
class AuthController
{
    function __construct(){
          
    }

    function connexion()
    {
        $ds = DIRECTORY_SEPARATOR;
        $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds ;
        $file = "{$base_dir}Vue{$ds}connexion.php";
        include($file);
        
        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
           if ($_POST["emailUtilisateur" ]=="ken@gmail.com" and $_POST["motDePasseUtilisateur"]=="nado32")
           {
            $file = "{$base_dir}Vue{$ds}dashboard.php";
            header($file);
           }

        }

    }

    function inscription()
    {
        $ds = DIRECTORY_SEPARATOR;
        $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds ;
        $file = "{$base_dir}Vue{$ds}inscription.php";
        include($file);

    }

}
