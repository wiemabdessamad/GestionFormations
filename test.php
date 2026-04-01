<?php
$formations = ["Développement Web", "Réseaux", "Sécurité", "Base de données"];
foreach ($formations as $formation) {
    echo $formation . "<br>";
}
$utilisateur = [
    "nom" => "Abdessamad",
    "prenom" => "Wiem",
    "email" => "wiemabdessamad@email.com",
    "formation" => "Développement Web",
    "age" => "21",
];
echo "Nom : " . $utilisateur["nom"] . "<br>";
echo "Prénom : " . $utilisateur["prenom"] . "<br>";
echo "Email : " . $utilisateur["email"] . "<br>";
echo "Formation : " . $utilisateur["formation"];
echo "<p>Bienvenue " . $utilisateur["prenom"] . " " . $utilisateur["nom"] . "</p>";
$formations = [
    ["nom" => "Développement Web", "duree" => "3 mois"],
    ["nom" => "Réseaux", "duree" => "2 mois"],
    ["nom" => "Sécurité", "duree" => "4 mois"]
];
foreach ($formations as $f) {
    echo "Formation : " . $f["nom"] .
        " - Durée : " . $f["duree"] . "<br>";
}
?>;