<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création</title>

    <style>
        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 45px;
        }
    </style>
</head>
<body>

<?php
        require('../../view/header.php');
?>
    
<h1>Ajouter une nouvelle formation</h1>
<form action="" method="POST">
    <label for="title">Nom :</label><br>
    <input type="text" name="nom" id="nom"><br><br>
    <label for="dated">Date de début:</label><br>
    <input type="date" name="dated" id="dated"><br><br>
    <label for="datef">Date de fin :</label><br>
    <input type="text" name="datef" id="datef"><br><br>
    <label for="prix">Prix :</label><br>
    <input type="text" name="prix" id="prix"><br><br>
    <label for="list-part">Liste des participants :</label><br>
    <input type="text" name="list-part" id="list-part"><br><br>
    <label for="part-max">Participants maximum :</label><br>
    <input type="text" name="part-max" id="part-max"><br><br>
    <input type="submit" value="Créer">
</form>

<?php
        require('../../view/footer.php');
?>
</body>
</html>