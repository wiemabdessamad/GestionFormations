<?php
// models/Database.php
// Patron Singleton : une seule connexion PDO partagée dans toute l'app.
// Avantage : évite d'ouvrir plusieurs connexions à MySQL.

class Database {
    private static $instance = null;

    public static function connect(): PDO {
        if (self::$instance === null) {
            try {
                self::$instance = new PDO(
                    'mysql:host=localhost;dbname=gestion_formations;charset=utf8mb4',
                    'root',
                    '',
                    [
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    ]
                );
            } catch (PDOException $e) {
                die('Erreur BD : ' . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
