-- Créer la base de données
CREATE DATABASE at_un;

-- Créer la table des utilisateurs
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
);
