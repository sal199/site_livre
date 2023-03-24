<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysql avec php</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="lien">
    <a href="ajouter.php">ajouter livre</a>
    </div>

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

        // recuperation des donner par select
        // la requet select 
        $res=$connexion->query("select * from livre");

      // recuper les donner dans un tableau
        $tableau=$res->fetchAll();
        $taille_tableau=count($tableau);
        for($i=0;$i<$taille_tableau;$i++){
            $image=$tableau[$i]["image_url"];
            $id_livre=$tableau[$i]["id_livre"];
            echo"<h1>".$tableau[$i]["titre"]."</h1>" .'<br>';
           echo "<img src='$image'>".'<br>' ;
           echo" <a class='livre' href='suprimer.php?id_livre=$id_livre'>suprimer</a>";
           echo" <a href='modifier.php?id_livre=$id_livre'>modifier</a>";
        }
    
    ?>
    
   
    
    
    
</body>
</html>