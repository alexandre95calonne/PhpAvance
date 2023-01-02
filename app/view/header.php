<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <style>
        .ensemble{
            height: 160px;
            background-color: #B6AFAB;
            color: white;
            display: flex;
        }
        
        .titre1 {
            margin-top: 3.5%;
            margin-left: 2%;
        }

        .liste1 {
            margin-left: 15%;
            display: flex;
        }

        .liste1txt {
            padding-left: 25px;
            margin-top: 20%;
        }

        .user {
            padding-left: 25%;
            margin-top: 4%;
            color: black;
        }
        
    </style>
</head>
<body>

    <div class="ensemble">
        <h1 class="titre1">MOVIE-LISTING</h1>

        <div class="user">
        <?php /*echo("Bienvenue ".$_SESSION['firstname']." ".$_SESSION['lastname']." !")*/ echo 'Alex';?>
        </div>

        <div class="liste1">
            <p class="liste1txt"><a href="ajout_film-form.php">Ajouter une formation</a></p>
            <p class="liste1txt"><a href="list-film.php">Liste des formations</a></p>
            <p class="liste1txt"><a href="deconnexion-form.php">Se déconnecter</a></p>

        </div>
    </div>
    
</body>
</html>