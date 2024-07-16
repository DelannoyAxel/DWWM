-- Création de la base de données
DROP DATABASE IF EXISTS repertoire;
CREATE DATABASE IF NOT EXISTS repertoire;

-- Utilisation de la base de données
USE repertoire;

-- Création de la table Users
CREATE TABLE users (
    id INT AUTO_INCREMENT NOT NULL,
    nom VARCHAR(55) NOT NULL,
    prenom VARCHAR(55) NOT NULL,
    email VARCHAR(55) NOT NULL UNIQUE,
    telephone VARCHAR(20) NOT NULL,
    image_name VARCHAR(100) DEFAULT 'default.jpg',
    password VARCHAR(255) NOT NULL,
    CONSTRAINT USERS_PK PRIMARY KEY(id)
) ENGINE=InnoDB;

-- Création de la table UserRoles
CREATE TABLE userroles (
    user_id INT PRIMARY KEY,
    role VARCHAR(50) NOT NULL,
    CONSTRAINT USERS_FK FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Insertion des utilisateurs
INSERT INTO users (nom, prenom, email, telephone, image_name, password) VALUES ('Dupont', 'Val', 'val.dupont@gmail.com', '0123456789', 'val.jpg', '$2y$10$9tQbqhyqCpAgReCG4Kn5pee309ixsrz7mcg7W.YRQ5ehmq6LU/TPG');
INSERT INTO users (nom, prenom, email, telephone, image_name, password) VALUES ('Duck', 'Donald', 'donald.duck@gmail.com', '0987654321', 'donald.jpg', '$2y$10$Hn04RPO57iUUHrZ0TTIgV.r2ZvmZar3loqC5gwZBAT9TEdCEbZgaW');

-- Attribuer des rôles aux utilisateurs
INSERT INTO userroles (user_id, role) VALUES (1, 'admin');
INSERT INTO userroles (user_id, role) VALUES (2, 'non-admin');