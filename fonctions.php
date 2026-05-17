<?php
// includes/fonctions.php
// TP4 — Fonctions PHP & structuration du code

/**
 * Affiche un message d'erreur en rouge si $erreur n'est pas vide.
 */
function afficherErreur(string $erreur): string {
    if (!empty($erreur)) {
        return "<div style='color:red;'>$erreur</div>";
    }
    return '';
}

/**
 * Affiche un message de succès en vert avec les données de l'utilisateur.
 */
function afficherSucces(string $nom, string $prenom, string $email): string {
    return "<div style='color:green;'>
                Formulaire valide ✔<br>
                Nom : $nom <br>
                Prénom : $prenom <br>
                Email : $email
            </div>";
}

/**
 * Nettoie une donnée utilisateur (TP4 extension).
 * Supprime les espaces et protège contre les XSS.
 */
function nettoyer(string $data): string {
    return htmlspecialchars(trim($data));
}
