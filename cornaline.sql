

-- Table des catégories de bières
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    description TEXT
);

-- Table des bières
CREATE TABLE bieres (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    description TEXT,
    categorie_id INT,
    prix DECIMAL(10,2) NOT NULL,
    alcool_percentage DECIMAL(3,1),
    image_url VARCHAR(255),
    stock INT DEFAULT 0,
    FOREIGN KEY (categorie_id) REFERENCES categories(id)
);

-- Table des clients
CREATE TABLE clients (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL UNIQUE,
    prenom VARCHAR(50) NOT NULL,
    nom VARCHAR(50) NOT NULL,
    adresse TEXT NOT NULL,
    code_postal VARCHAR(10) NOT NULL,
    ville VARCHAR(100) NOT NULL,
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Table des commandes
CREATE TABLE commandes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    client_id INT NOT NULL,
    date_commande DATETIME DEFAULT CURRENT_TIMESTAMP,
    statut ENUM('en_attente', 'confirmee', 'expediee', 'livree') DEFAULT 'en_attente',
    total DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (client_id) REFERENCES clients(id)
);

-- Table des détails de commande
CREATE TABLE details_commande (
    commande_id INT,
    biere_id INT,
    quantite INT NOT NULL,
    prix_unitaire DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (commande_id, biere_id),
    FOREIGN KEY (commande_id) REFERENCES commandes(id),
    FOREIGN KEY (biere_id) REFERENCES bieres(id)
);

-- Insertion des données de base pour les catégories
INSERT INTO categories (nom, description) VALUES
('Blonde', 'Bières légères et rafraîchissantes'),
('Ambrée', 'Bières aux arômes de caramel et de malt torréfié'),
('Brune', 'Bières riches aux notes de café et de chocolat'),
('Fruitée', 'Bières aux saveurs fruitées');

-- Insertion des données de base pour les bières
INSERT INTO bieres (nom, description, categorie_id, prix, alcool_percentage, image_url) VALUES
('Cornaline Blonde', 'Une bière légère et rafraîchissante aux notes fruitées', 1, 4.50, 5.0, 'assets/images/etiquette-blanche.jpg'),
('Cornaline Ambrée', 'Une bière aux arômes de caramel et de malt torréfié', 2, 4.50, 6.0, 'assets/images/etiquette-ambree.jpg'),
('Cornaline Brune', 'Une bière riche et complexe aux notes de café et de chocolat', 3, 4.50, 6.5, 'assets/images/etiquette-brune.jpg'),
('Orange Ananas', 'Une bière exotique et rafraîchissante aux saveurs d''orange et d''ananas', 4, 5.00, 5.5, 'assets/images/etiquette-orange-ananas.jpg'),
('Orange Vanille', 'Une bière douce et gourmande aux notes d''orange et de vanille', 4, 5.00, 5.5, 'assets/images/etiquette-orange-vanille.jpg'),
('Orange Pamplemousse', 'Une bière vive et fruitée aux arômes d''orange et de pamplemousse', 4, 5.00, 5.5, 'assets/images/etiquette-orange-pamplemousse.jpg'); 