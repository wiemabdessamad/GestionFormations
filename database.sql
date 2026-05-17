-- ============================================================
-- GestionFormations - Script de création de la base de données
-- TP5 - Base de données & CRUD
-- ============================================================

-- Étape 1 : Créer la base de données
CREATE DATABASE IF NOT EXISTS gestion_formations
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

-- Étape 2 : Sélectionner la base
USE gestion_formations;

-- Étape 3 : Créer la table formations
CREATE TABLE IF NOT EXISTS formations (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    titre       VARCHAR(150) NOT NULL,
    description TEXT         NOT NULL,
    prix        DECIMAL(8,2) NOT NULL DEFAULT 0,
    duree       VARCHAR(30)  DEFAULT '20h',
    niveau      VARCHAR(50)  DEFAULT 'Tous niveaux',
    created_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP
);

-- Étape 4 : Créer la table inscriptions
CREATE TABLE IF NOT EXISTS inscriptions (
    id               INT AUTO_INCREMENT PRIMARY KEY,
    nom              VARCHAR(80)  NOT NULL,
    prenom           VARCHAR(80)  NOT NULL,
    email            VARCHAR(150) NOT NULL,
    formation_id     INT          NOT NULL,
    statut_paiement  ENUM('en_attente','paye','echec') DEFAULT 'en_attente',
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (formation_id) REFERENCES formations(id) ON DELETE CASCADE
);

-- Étape 5 : Insérer des données de test
INSERT INTO formations (titre, description, prix, duree, niveau) VALUES
('Intelligence Artificielle',
 'Maîtrisez le machine learning et les réseaux de neurones.',
 299.00, '40h', 'Intermédiaire'),
('Data Science avec Python',
 'Analysez des données avec Python, Pandas et Matplotlib.',
 249.00, '35h', 'Débutant'),
('Développement Web Full Stack',
 'Créez des apps web avec HTML, CSS, PHP et MySQL.',
 199.00, '50h', 'Débutant'),
('Cybersécurité & Ethical Hacking',
 'Apprenez à sécuriser des systèmes et à tester leur résistance.',
 349.00, '45h', 'Avancé');
