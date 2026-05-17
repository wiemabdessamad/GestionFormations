<?php
// controllers/PaiementController.php
// Rôle : simulation de paiement fictif + gestion session

require_once 'models/Inscription.php';

// Récupérer l'ID de l'inscription depuis l'URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Vérifier que l'inscription existe
if ($id <= 0) {
    header('Location: index.php');
    exit();
}

$inscription    = Inscription::getById($id);
$erreur_paiement = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $mode = $_POST['mode'] ?? '';

    if ($mode === 'ok') {
        // — Paiement réussi —

        // 1. Mettre à jour le statut en BD
        Inscription::marquerPaye($id);

        // 2. Stocker les infos en SESSION
        // Les sessions permettent de transmettre des données entre pages
        // sans les mettre dans l'URL (sécurisé)
        $_SESSION['paiement_ok']      = true;
        $_SESSION['inscription_id']   = $id;
        $_SESSION['formation_titre']  = $inscription['formation_titre'];
        $_SESSION['etudiant_prenom']  = $inscription['prenom'];

        // 3. Rediriger vers la page de confirmation
        header('Location: index.php?page=succes&id=' . $id);
        exit();

    } else {
        // Paiement refusé → rester sur la page avec message d'erreur
        $erreur_paiement = true;
    }
}

require 'views/paiement.php';
