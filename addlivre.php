<?php

// connexion de la base de donnees
$databaseType="mysql";
$host="localhost";
$port=3306;
$databaseName="ma_db";
$user="root"; 
$password="";

$connexion= new PDO("$databaseType:host=$host;port=$port;dbname=$databaseName"
,$user,$password);
// insertion des donnes dans la base
// declaration des variable
$titre =$_GET["titre"];
$image=$_GET["image_url"];

$reponse=$connexion->exec("insert into livre (titre ,image_url)
 values('$titre','$image')");

// verification de la requet
if ($reponse) {
    echo"Livre ajouté avec succés";
} else {
    echo"error de l'ajouté ";
}


?>
<a href="index.php"> accueil</a>