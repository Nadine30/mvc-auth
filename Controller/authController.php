<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds ;
$file = "{$base_dir}Model{$ds}Utilisateur.php";
require $file;

class AuthController
{
    protected $user;

    function __construct()
    {
        $this->user = new Utilisateur(); 
    }

    function connexion()
    {
        $ds = DIRECTORY_SEPARATOR;
        $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds ;
        $file = "{$base_dir}Vue{$ds}connexion.php";
        include($file);
        
        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $email=$_POST["emailUtilisateur"];
            $mdp=$_POST["motDePasseUtilisateur"];

            if ($this->user->search($email) and $this->user->verify($mdp,$email))
        //    if ($_POST["emailUtilisateur" ]=="ken@gmail.com" and $_POST["motDePasseUtilisateur"]=="nado32")
           {
            $file = "{$base_dir}Vue{$ds}dashboard.php";
            header($file);
           }
           else{
            echo "<div class='alert alert-danger'> Informations incorrectes !</div>";
           }

        }

    }

    function inscription()
    {
        $ds = DIRECTORY_SEPARATOR;
        $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds ;
        $file = "{$base_dir}Vue{$ds}inscription.php";
        include($file);


        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $nom=$_POST["NomUtilisateur" ];
            $email=$_POST["EmailUtilisateur"];
            $pwd1=password_hash($_POST["pwd1"],PASSWORD_DEFAULT,['cost' => 12] ) ;
            $pwd2=password_hash($_POST["pwd2"],PASSWORD_DEFAULT,['cost' => 12]);

            
            if ($this->user->search($email))
            {
                echo "<div class='alert alert-danger'> Ce compte existe déja !</div>";
            }

           if ($_POST["pwd1"]!=$_POST["pwd2"])
           {
            echo "<div class='alert alert-danger'> Mot de passe incorrect !</div>";
           }
           else{
            $this->user->create($nom,$email,$pwd1);
           header("Location:/dashboard");
           }

        }

    }

    function Bienvenue()
    {
        $ds = DIRECTORY_SEPARATOR;
        $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds ;
        $file = "{$base_dir}Vue{$ds}Accueil.php";
        include($file);

    }

}
