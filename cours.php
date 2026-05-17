<?php
// views/cours.php — Accès aux cours (protégé)
$pageTitle = 'Mes Cours';
require 'views/partials/header.php';
?>

<div class="container">
    <h1>📖 Mes Cours</h1>
    <p>Bienvenue <strong><?= htmlspecialchars($_SESSION['etudiant_prenom'] ?? '') ?></strong> !
       Voici votre accès à la formation :
       <strong><?= htmlspecialchars($_SESSION['formation_titre'] ?? '') ?></strong>
    </p>

    <div class="cours-section">
        <h2 style="margin-bottom:16px;">Contenu de la formation</h2>

        <div class="chapitre">
            <h3>📌 Chapitre 1 — Introduction</h3>
            <p>Présentation du domaine, objectifs pédagogiques et outils nécessaires.</p>
        </div>

        <div class="chapitre">
            <h3>📌 Chapitre 2 — Fondamentaux</h3>
            <p>Concepts de base, définitions clés et premiers exercices pratiques.</p>
        </div>

        <div class="chapitre">
            <h3>📌 Chapitre 3 — Pratique avancée</h3>
            <p>Projets guidés et études de cas réels pour consolider vos acquis.</p>
        </div>

        <div class="chapitre">
            <h3>📌 Chapitre 4 — Projet final</h3>
            <p>Réalisation d'un projet complet pour valider la formation et obtenir votre certificat.</p>
        </div>
    </div>
</div>

<?php require 'views/partials/footer.php'; ?>
