<?php
// controllers/FormationController.php
// Rôle : récupère les formations depuis le modèle, puis charge la vue

require_once 'models/Formation.php';

// Récupérer le filtre niveau depuis l'URL (optionnel)
// Exemple d'URL : index.php?page=formations&niveau=Débutant
$niveau = $_GET['niveau'] ?? '';

// Récupérer les formations (avec ou sans filtre)
$formations = Formation::getAll($niveau);

// Charger la vue
require 'views/formations.php';
