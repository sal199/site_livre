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
    // modification de la requete

    $titre=$_GET['titre'];
    $image=$_GET['image_url'];

    $idlivre=$_GET["id_livre"];
    $reponse=$connexion->exec("update livre set titre='$titre', image_url='$image' where id_livre =$idlivre");

    if($reponse){
        echo" votre modification a reussie";
    }
    else{
        echo"erreur";
    }


    ?>
    <a href="index.php"> accueil</a>