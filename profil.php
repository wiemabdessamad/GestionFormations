<?php
// TP2 — Introduction à PHP & affichage dynamique
$nom    = "AYARI";
$prenom = "Asma";
$email  = "asma.ayari@email.com";
$age    = 30;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Profil utilisateur</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div style="margin:20px;">
    <h1>Profil utilisateur</h1>

    <p><strong>Nom :</strong> <?php echo $nom; ?></p>
    <p><strong>Prénom :</strong> <?php echo $prenom; ?></p>
    <p><strong>Email :</strong> <?php echo $email; ?></p>
    <p><strong>Âge :</strong> <?php echo $age; ?> ans</p>
</div>
</body>
</html>
