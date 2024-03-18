<?php
$db = new PDO("mysql:host=localhost;dbname=MvcAuth","root","");
$sql="CREATE table Utilisateurs (id int primary key, nom varchar(20), email varchar(40), mdp varchar(10))";
$db->exec($sql);
