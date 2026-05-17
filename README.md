# GestionFormations — Projet PHP/MySQL MVC
**ISET'COM | L2-GTIC | 2025-2026**

---

## 📁 Structure du projet

```
GestionFormations/
│
├── index.php                  ← Point d'entrée UNIQUE (routeur MVC)
│
├── controllers/               ← Logique métier
│   ├── FormationController.php
│   ├── InscriptionController.php
│   ├── PaiementController.php
│   └── CoursController.php
│
├── models/                    ← Accès base de données (PDO)
│   ├── Database.php           (Singleton PDO)
│   ├── Formation.php          (Requêtes table formations)
│   └── Inscription.php        (Requêtes table inscriptions)
│
├── views/                     ← Affichage HTML uniquement
│   ├── partials/
│   │   ├── header.php
│   │   └── footer.php
│   ├── home.php
│   ├── formations.php
│   ├── inscription.php
│   ├── paiement.php
│   ├── succes.php
│   └── cours.php
│
├── assets/
│   └── style.css              ← Feuille de styles CSS
│
├── includes/                  ← Fichiers TP3/TP4 (héritage)
│   ├── connexion.php
│   ├── fonctions.php
│   └── validation.php
│
├── profil.php                 ← TP2 — Affichage dynamique PHP
├── profil_form.html           ← TP1 — Formulaire HTML
├── traitement.php             ← TP3/TP4 — Traitement formulaire
└── database.sql               ← Script SQL de création BD
```

---

## 🚀 Installation & lancement

### 1. Prérequis
- **XAMPP** installé (Apache + MySQL)
- **Visual Studio Code**

### 2. Copier le projet
Copier le dossier `GestionFormations/` dans :
```
C:\xampp\htdocs\GestionFormations\
```

### 3. Créer la base de données
1. Démarrer **Apache** et **MySQL** dans le panneau XAMPP
2. Ouvrir `http://localhost/phpmyadmin`
3. Aller dans l'onglet **SQL**
4. Coller et exécuter le contenu de `database.sql`

### 4. Tester l'application
Ouvrir dans le navigateur :
```
http://localhost/GestionFormations/
```

---

## 🔄 Tunnel complet à tester (TP6)

| Étape | Action | Résultat attendu |
|-------|--------|-----------------|
| 1 | Ouvrir `http://localhost/GestionFormations/` | Page d'accueil |
| 2 | Cliquer **Formations** | 4 formations depuis la BD |
| 3 | Cliquer **S'inscrire** sur une formation | Formulaire pré-rempli |
| 4 | Soumettre le formulaire valide | Redirection vers paiement |
| 5 | Cliquer **Paiement réussi** | Redirection vers succès |
| 6 | Cliquer **Accéder aux cours** | Page cours protégée |
| 7 | Tenter `?page=cours` sans payer | Redirection forcée |
| 8 | Vérifier phpMyAdmin | Ligne avec `statut_paiement = paye` |

---

## 📚 Récapitulatif des TPs

| TP | Sujet | Fichiers créés |
|----|-------|----------------|
| TP1 | HTML/CSS & formulaires | `profil_form.html`, `assets/style.css` |
| TP2 | Introduction PHP & affichage dynamique | `profil.php` |
| TP3 | Transmission données & validation PHP | `traitement.php` |
| TP4 | Fonctions PHP & structuration | `includes/fonctions.php`, `includes/validation.php` |
| TP5 | Base de données & CRUD | `database.sql`, `includes/connexion.php`, `models/` |
| TP6 | Architecture MVC | `index.php`, `controllers/`, `views/`, `models/` |
