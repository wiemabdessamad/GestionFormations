<?php
// controllers/CoursController.php
// Rôle : préparer les données de la page cours (protégée par session)
// La protection est déjà gérée par index.php (routeur)

// Ici on peut récupérer des données supplémentaires si nécessaire
// Pour l'instant la vue utilise directement les variables SESSION

require 'views/cours.php';
