<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

// supprimer une livre  a partir de son id
$id_livre=$_GET['id_livre'];

// requet de suppression
$reponse=$connexion->exec("delete from livre where id_livre=$id_livre");

// verification de la 
if ($reponse) {
    echo "<h1> la suppression est reussi</h1>";
} else {
    echo "<h1>erreur</h1>";
}



?> 
<a href="index.php">accueil</a>
</body>
</html>