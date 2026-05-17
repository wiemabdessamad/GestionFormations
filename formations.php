<?php
// views/formations.php
$pageTitle = 'Formations';
require 'views/partials/header.php';
?>

<div class="container">
    <h1>Nos Formations</h1>

    <!-- Liens de filtrage par niveau -->
    <div class="filtres">
        <a href="index.php?page=formations" <?= empty($niveau) ? 'class="active"' : '' ?>>
            Toutes les formations
        </a>
        <a href="index.php?page=formations&niveau=Débutant" <?= $niveau === 'Débutant' ? 'class="active"' : '' ?>>
            Débutant
        </a>
        <a href="index.php?page=formations&niveau=Intermédiaire" <?= $niveau === 'Intermédiaire' ? 'class="active"' : '' ?>>
            Intermédiaire
        </a>
        <a href="index.php?page=formations&niveau=Avancé" <?= $niveau === 'Avancé' ? 'class="active"' : '' ?>>
            Avancé
        </a>
    </div>

    <?php if (empty($formations)): ?>
        <p>Aucune formation disponible pour le moment.</p>
    <?php else: ?>
        <div class="formations-grid">
            <?php foreach ($formations as $f): ?>
                <div class="formation-card">
                    <h2><?= htmlspecialchars($f['titre']) ?></h2>
                    <p><?= htmlspecialchars($f['description']) ?></p>
                    <p class="meta">
                        ⏱ Durée : <?= htmlspecialchars($f['duree']) ?>
                        &nbsp;|&nbsp;
                        🎯 Niveau : <?= htmlspecialchars($f['niveau']) ?>
                    </p>
                    <p class="prix"><?= number_format($f['prix'], 2, ',', ' ') ?> DT</p>
                    <a class="btn-inscrire"
                       href="index.php?page=inscription&formation_id=<?= $f['id'] ?>">
                        S'inscrire →
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php require 'views/partials/footer.php'; ?>
