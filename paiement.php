<?php
// views/paiement.php
$pageTitle = 'Finaliser l\'inscription';
require 'views/partials/header.php';
?>

<div class="container">
    <div class="paiement-box">

        <!-- En-tête avec icône -->
        <div class="paiement-header">
            <div class="paiement-icon">🎓</div>
            <h1>Finaliser votre inscription</h1>
            <p class="paiement-subtitle">Vérifiez vos informations avant de valider</p>
        </div>

        <!-- Message d'annulation -->
        <?php if (!empty($erreur_paiement)): ?>
            <div class="alert-annulation">
                <span class="alert-annulation-icon">↩</span>
                <div>
                    <strong>Inscription annulée.</strong><br>
                    Vous pouvez modifier votre choix ou retourner aux formations.
                </div>
            </div>
        <?php endif; ?>

        <?php if ($inscription): ?>

            <!-- Récapitulatif -->
            <div class="recap">
                <div class="recap-title">📋 Récapitulatif de votre inscription</div>
                <div class="recap-grid">
                    <div class="recap-row">
                        <span class="recap-label">Formation</span>
                        <span class="recap-value formation-name"><?= htmlspecialchars($inscription['formation_titre']) ?></span>
                    </div>
                    <div class="recap-row">
                        <span class="recap-label">Étudiant</span>
                        <span class="recap-value"><?= htmlspecialchars($inscription['prenom']) ?> <?= htmlspecialchars($inscription['nom']) ?></span>
                    </div>
                    <div class="recap-row">
                        <span class="recap-label">Email</span>
                        <span class="recap-value"><?= htmlspecialchars($inscription['email']) ?></span>
                    </div>
                    <div class="recap-row recap-total">
                        <span class="recap-label">Montant total</span>
                        <span class="recap-value prix-total"><?= number_format($inscription['prix'], 2, ',', ' ') ?> DT</span>
                    </div>
                </div>
            </div>

            <!-- Boutons d'action -->
            <form method="POST" action="index.php?page=paiement&id=<?= $inscription['id'] ?>">
                <div class="paiement-buttons">
                    <button type="submit" name="mode" value="ok" class="btn-valider">
                        <span class="btn-icon">✔</span>
                        <span class="btn-text">
                            <strong>Valider l'inscription</strong>
                            <small>Confirmer et accéder aux cours</small>
                        </span>
                    </button>
                    <button type="submit" name="mode" value="refuse" class="btn-annuler">
                        <span class="btn-icon">←</span>
                        <span class="btn-text">
                            <strong>Annuler</strong>
                            <small>Retour aux formations</small>
                        </span>
                    </button>
                </div>
            </form>

            <!-- Mention de sécurité -->
            <p class="mention-securite">🔒 Inscription sécurisée — Vos données sont protégées</p>

        <?php else: ?>
            <div class="alert">
                <p>Inscription introuvable. <a href="index.php?page=inscription">Retour au formulaire</a></p>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php require 'views/partials/footer.php'; ?>
