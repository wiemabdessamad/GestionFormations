<?php
// traitement.php
// TP3 → TP4 — Réception, validation et affichage des données du formulaire profil

require "includes/fonctions.php";
require "includes/validation.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupérer et nettoyer les données (TP4 extension)
    $nom    = nettoyer($_POST["nom"]    ?? '');
    $prenom = nettoyer($_POST["prenom"] ?? '');
    $email  = nettoyer($_POST["email"]  ?? '');

    // Valider les données (TP4)
    $erreur = validerFormulaire($nom, $prenom, $email);

    // Affichage des erreurs ou du succès
    if (!empty($erreur)) {
        echo afficherErreur($erreur);
    } else {
        echo afficherSucces($nom, $prenom, $email);
    }
}
?>
