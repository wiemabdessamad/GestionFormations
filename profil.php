<?php
$nom = "ABDESSAMAD";
$prenom = "Wiem";
$email = "wiemabdessamad@email.com";
?>

<!DOCTYPE html> 
<html lang="fr"> 
<head> 
    <title>Profil utilisateur</title>
</head>
<meta charset="UTF-8"> 
<body>

    <h1>Profil utilisateur</h1>

    <p>Nom : <?= $nom ?></p>
    <p>Prénom : <?= $prenom ?></p>
    <p>Email : <?= $email ?></p>
</body>
</html>
<p>Date : <?= date("H:i:s") ?></p> 
