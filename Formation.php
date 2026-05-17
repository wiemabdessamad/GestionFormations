<?php
// models/Formation.php
// Toutes les opérations sur la table formations
require_once 'Database.php';

class Formation {

    // Récupérer toutes les formations (avec filtre optionnel par niveau)
    public static function getAll(string $niveau = ''): array {
        $pdo = Database::connect();

        if (!empty($niveau)) {
            $stmt = $pdo->prepare('SELECT * FROM formations WHERE niveau = ? ORDER BY id ASC');
            $stmt->execute([$niveau]);
        } else {
            $stmt = $pdo->query('SELECT * FROM formations ORDER BY id ASC');
        }

        return $stmt->fetchAll();
    }

    // Récupérer une formation par son ID
    public static function getById(int $id): array|false {
        $pdo  = Database::connect();
        $stmt = $pdo->prepare('SELECT * FROM formations WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
