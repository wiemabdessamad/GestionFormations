<?php
// models/Inscription.php
// Toutes les opérations sur la table inscriptions
require_once 'Database.php';

class Inscription {

    // Insérer une nouvelle inscription en BD
    // Retourne l'ID de la ligne insérée (utilisé pour rediriger vers paiement)
    public static function ajouter(string $nom, string $prenom, string $email, int $formation_id): int {
        $pdo = Database::connect();

        // Vérifier si cet email est déjà inscrit à cette formation
        $check = $pdo->prepare(
            'SELECT id FROM inscriptions WHERE email = ? AND formation_id = ?'
        );
        $check->execute([$email, $formation_id]);
        if ($check->fetch()) {
            throw new Exception('Cet email est déjà inscrit à cette formation.');
        }

        $stmt = $pdo->prepare(
            'INSERT INTO inscriptions (nom, prenom, email, formation_id, statut_paiement, date_inscription)'
            . ' VALUES (?, ?, ?, ?, "en_attente", NOW())'
        );
        $stmt->execute([$nom, $prenom, $email, $formation_id]);
        return (int) $pdo->lastInsertId();
    }

    // Récupérer une inscription par son ID + les infos de la formation associée
    // Utilise une jointure SQL (JOIN) pour lier les deux tables
    public static function getById(int $id): array|false {
        $pdo  = Database::connect();
        $stmt = $pdo->prepare(
            'SELECT i.*, f.titre AS formation_titre, f.prix'
            . ' FROM inscriptions i'
            . ' JOIN formations f ON i.formation_id = f.id'
            . ' WHERE i.id = ?'
        );
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    // Mettre à jour le statut de paiement à 'paye'
    public static function marquerPaye(int $id): void {
        $pdo  = Database::connect();
        $stmt = $pdo->prepare(
            'UPDATE inscriptions SET statut_paiement = "paye" WHERE id = ?'
        );
        $stmt->execute([$id]);
    }
}
