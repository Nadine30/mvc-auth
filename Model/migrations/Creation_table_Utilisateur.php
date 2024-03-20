<?php
try
{
    $db = new PDO("mysql:host=localhost;dbname=MvcAuth","root","");
    $sql="CREATE table Utilisateurs (id int primary key AUTO_INCREMENT, nom varchar(20), email varchar(40), mdp varchar(10))";
    $db->exec($sql);
    echo "la table Utilisateurs a été crée";

}
catch (Exception $e)
{
   echo "Erreur lors de la création";
}

