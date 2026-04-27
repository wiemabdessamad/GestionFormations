<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $email = trim($_POST["email"]);

    $erreur = "";

    if (empty($nom)) {
        $erreur .= "Le nom est obligatoire.<br>";
    }
    if (empty($prenom)) {
        $erreur .= "Le prénom est obligatoire.<br>";
    }
    if (empty($email)) {
        $erreur .= "L'email est obligatoire.<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreur .= "Format email invalide.<br>";
    }

    if (!empty($erreur)) {
        echo "<div style='color:red;'>$erreur</div>";
    } else {
        echo "<div style='color:green;'>Formulaire valide ✔</div>";
        echo "Nom : $nom <br> Prénom : $prenom <br> Email : $email";
    }
}
?>