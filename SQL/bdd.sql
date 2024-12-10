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

-- Insertion de données dans la table utilisateur
INSERT INTO utilisateur (prenom, nom, email, password)
VALUES 
    ('Alice', 'Durand', 'alice.durand@example.com', 'password123'),
    ('Bob', 'Martin', 'bob.martin@example.com', 'password456'),
    ('Claire', 'Dubois', 'claire.dubois@example.com', 'password789'),
    ('Aymeric', 'Cherbonnier', 't@t', '123');

-- Insertion de données dans la table jeu
INSERT INTO jeu (nom, editeur, date_sortie, plateforme, description, image_url, site_url)
VALUES 
    ('The Legend of Zelda: Breath of the Wild', 'Nintendo', '2017-03-03', 'Switch', 'Un jeu d\action-aventure dans un vaste monde ouvert.', 'https://example.com/zelda.jpg', 'https://www.zelda.com'),
    ('Cyberpunk 2077', 'CD Projekt Red', '2020-12-10', 'PC, PS4, Xbox One', 'Un RPG futuriste dans une métropole dystopique.', 'https://example.com/cyberpunk.jpg', 'https://www.cyberpunk.net'),
    ('Elden Ring', 'FromSoftware', '2022-02-25', 'PC, PS5, Xbox Series X', 'Un action-RPG dans un monde sombre et fantastique.', 'https://example.com/eldenring.jpg', 'https://en.bandainamcoent.eu/elden-ring'),
    ('Rocket League', 'Psyonix', '2015-07-07', 'PC, PS4, Xbox One, Switch', 'Un jeu de football avec des voitures.', 'https://example.com/rocketleague.jpg', 'https://www.rocketleague.com');

-- Insertion de données dans la table utilisateur_jeu
INSERT INTO utilisateur_jeu (utilisateur_id, jeu_id, temps_de_jeu)
VALUES 
    (1, 1, 120), -- Alice a joué 120 minutes à Zelda
    (1, 2, 60),  -- Alice a joué 60 minutes à Cyberpunk
    (2, 3, 200), -- Bob a joué 200 minutes à Elden Ring
    (3, 1, 90),  -- Claire a joué 90 minutes à Zelda
    (4, 4, 120000);  -- Aymeric a joué 100 minutes à Rocket League
