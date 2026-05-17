<?php
// views/succes.php
$pageTitle = 'Paiement confirmé';
require 'views/partials/header.php';
?>

<div class="container">
    <div class="succes-box">
        <div class="icon">🎉</div>
        <h1>Paiement confirmé !</h1>
        <p>
            Félicitations <strong><?= htmlspecialchars($_SESSION['etudiant_prenom'] ?? '') ?></strong> !<br>
            Vous êtes inscrit(e) à la formation :<br>
            <strong><?= htmlspecialchars($_SESSION['formation_titre'] ?? '') ?></strong>
        </p>
        <br>
        <a href="index.php?page=cours" style="
            display:inline-block; padding:12px 24px;
            background:#1A3A5C; color:white; border-radius:6px; font-size:1em;">
            📖 Accéder aux cours →
        </a>
        <br><br>
        <a href="index.php?page=formations">← Retour aux formations</a>
    </div>
</div>

<?php require 'views/partials/footer.php'; ?>
