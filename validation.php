<?php
// includes/validation.php
// TP4 — Validation centralisée du formulaire

/**
 * Valide les champs nom, prenom, email.
 * Retourne une chaîne d'erreurs (vide si tout est valide).
 */
function validerFormulaire(string $nom, string $prenom, string $email): string {
    $erreur = "";

    if (empty($nom)) {
        $erreur .= "Le nom est obligatoire.<br>";
    }

    if (empty($prenom)) {
        $erreur .= "Le prénom est obligatoire.<br>";
    }

    if (empty($email)) {
        $erreur .= "L'email est obligatoire.<br>";
    }

    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreur .= "Format email invalide.<br>";
    }

    return $erreur;
}
