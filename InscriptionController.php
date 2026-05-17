<?php
// controllers/InscriptionController.php
// Rôle : recevoir POST, valider, appeler le modèle, rediriger

require_once 'models/Inscription.php';
require_once 'models/Formation.php';

$erreurs  = [];
// Récupérer toutes les formations pour remplir le <select>
$formations = Formation::getAll();

// Pré-sélectionner une formation si l'utilisateur vient de la page formations
$formation_preselect = isset($_GET['formation_id']) ? (int)$_GET['formation_id'] : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupérer et nettoyer les données
    $nom          = trim($_POST['nom']          ?? '');
    $prenom       = trim($_POST['prenom']       ?? '');
    $email        = trim($_POST['email']        ?? '');
    $formation_id = (int)($_POST['formation_id'] ?? 0);

    // Validation
    if (empty($nom))    $erreurs[] = 'Le nom est obligatoire.';
    if (empty($prenom)) $erreurs[] = 'Le prénom est obligatoire.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                        $erreurs[] = 'Email invalide.';
    if ($formation_id <= 0)
                        $erreurs[] = 'Veuillez choisir une formation.';

    if (empty($erreurs)) {
        try {
            // Appel du modèle pour insérer en BD
            $id = Inscription::ajouter($nom, $prenom, $email, $formation_id);

            // Rediriger vers le paiement avec l'ID de l'inscription
            header('Location: index.php?page=paiement&id=' . $id);
            exit();

        } catch (Exception $e) {
            $erreurs[] = $e->getMessage();
        }
    }
}

// Afficher la vue (avec $erreurs et $formations disponibles)
require 'views/inscription.php';
