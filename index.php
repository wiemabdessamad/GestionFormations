<?php
// index.php — Routeur central
// Point d'entrée UNIQUE de l'application GestionFormations
// Toutes les URLs passent par ce fichier via le paramètre GET 'page'

// Démarrer la session PHP (obligatoire avant tout accès à $_SESSION)
session_start();

// Lire le paramètre ?page= dans l'URL
// Si absent, afficher la page d'accueil (valeur par défaut : 'home')
$page = $_GET['page'] ?? 'home';

// ── PROTECTION SESSION ──────────────────────────────────────────
// La page 'cours' n'est accessible QUE si le paiement a été validé.
// $_SESSION['paiement_ok'] est mis à true par PaiementController.php
// Si l'utilisateur tente d'accéder à 'cours' sans payer → redirection forcée
if ($page === 'cours') {
    if (!isset($_SESSION['paiement_ok']) || $_SESSION['paiement_ok'] !== true) {
        header('Location: index.php');
        exit();
    }
}

// ── ROUTAGE ────────────────────────────────────────────────────
// switch lit la valeur de $page et charge le fichier correspondant
switch ($page) {

    case 'formations':
        require 'controllers/FormationController.php';
        break;

    case 'inscription':
        require 'controllers/InscriptionController.php';
        break;

    case 'paiement':
        require 'controllers/PaiementController.php';
        break;

    case 'cours':
        require 'controllers/CoursController.php';
        break;

    case 'succes':
        require 'views/succes.php';
        break;

    default:
        // Toute URL inconnue affiche la page d'accueil
        require 'views/home.php';
}
