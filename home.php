<?php
$pageTitle = 'Accueil';
require 'views/partials/header.php';
?>

<div class="container">
    <div class="hero">
        <h1>🎓 Bienvenue sur GestionFormations</h1>
        <p>La plateforme e-learning moderne pour booster votre carrière.</p>
        <a href="index.php?page=formations">Découvrir les formations →</a>
    </div>

    <h2 style="margin-bottom:20px; font-size:1.5em;">Pourquoi nous choisir ?</h2>
    <div style="display:grid; grid-template-columns:repeat(auto-fill,minmax(220px,1fr)); gap:20px; margin-top:10px;">
        <div style="background:#fff; padding:26px; border-radius:16px; box-shadow:0 4px 18px rgba(92,45,145,0.12); border-top:4px solid #A855F7; text-align:center;">
            <div style="font-size:2.4em; margin-bottom:10px;">📚</div>
            <h3 style="margin-bottom:8px; font-size:1em;">Formations variées</h3>
            <p style="font-size:0.87em; color:#6B5E8A; margin:0;">IA, Data Science, Web, Cybersécurité…</p>
        </div>
        <div style="background:#fff; padding:26px; border-radius:16px; box-shadow:0 4px 18px rgba(92,45,145,0.12); border-top:4px solid #7B4BBF; text-align:center;">
            <div style="font-size:2.4em; margin-bottom:10px;">🎯</div>
            <h3 style="margin-bottom:8px; font-size:1em;">Tous niveaux</h3>
            <p style="font-size:0.87em; color:#6B5E8A; margin:0;">Débutant, Intermédiaire, Avancé.</p>
        </div>
        <div style="background:#fff; padding:26px; border-radius:16px; box-shadow:0 4px 18px rgba(92,45,145,0.12); border-top:4px solid #5C2D91; text-align:center;">
            <div style="font-size:2.4em; margin-bottom:10px;">🏆</div>
            <h3 style="margin-bottom:8px; font-size:1em;">Certification</h3>
            <p style="font-size:0.87em; color:#6B5E8A; margin:0;">Obtenez votre certificat à la fin.</p>
        </div>
        <div style="background:#fff; padding:26px; border-radius:16px; box-shadow:0 4px 18px rgba(92,45,145,0.12); border-top:4px solid #C084FC; text-align:center;">
            <div style="font-size:2.4em; margin-bottom:10px;">⚡</div>
            <h3 style="margin-bottom:8px; font-size:1em;">100% en ligne</h3>
            <p style="font-size:0.87em; color:#6B5E8A; margin:0;">Apprenez à votre rythme, partout.</p>
        </div>
    </div>
</div>

<?php require 'views/partials/footer.php'; ?>
