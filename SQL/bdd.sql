-- Création de la base de données
CREATE DATABASE IF NOT EXISTS gaming_platform;
USE gaming_platform;

-- Table utilisateur
CREATE TABLE utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(50) NOT NULL,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Table jeu
CREATE TABLE jeu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    editeur VARCHAR(100),
    date_sortie DATE,
    plateforme VARCHAR(50),
    description TEXT,
    image_url VARCHAR(255),
    site_url VARCHAR(255)
);

-- Table de liaison utilisateur-jeu
CREATE TABLE utilisateur_jeu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT NOT NULL,
    jeu_id INT NOT NULL,
    temps_de_jeu INT DEFAULT 0, -- Temps de jeu en minutes
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id) ON DELETE CASCADE,
    FOREIGN KEY (jeu_id) REFERENCES jeu(id) ON DELETE CASCADE,
    UNIQUE(utilisateur_id, jeu_id) -- Pour éviter les doublons
);
    