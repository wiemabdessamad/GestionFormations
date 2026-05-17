<?php
// includes/connexion.php
// TP5 — Connexion PDO à la base de données gestion_formations

function getConnexion(): PDO {
    $host   = 'localhost';          // Serveur MySQL (toujours localhost avec XAMPP)
    $dbname = 'gestion_formations'; // Nom de la base de données
    $user   = 'root';               // Utilisateur MySQL (root par défaut sous XAMPP)
    $pass   = '';                   // Mot de passe (vide par défaut sous XAMPP)

    try {
        $pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $user,
            $pass,
            [
                // En cas d'erreur SQL → lancer une exception
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                // Retourner les résultats sous forme de tableau associatif
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
        return $pdo;

    } catch (PDOException $e) {
        // En cas d'erreur de connexion : arrêter le script
        die('Erreur de connexion : ' . $e->getMessage());
    }
}
