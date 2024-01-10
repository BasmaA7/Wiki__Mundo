CREATE DATABASE Wiki;
USE Wiki;
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type ENUM('admin', 'auteur') NOT NULL
);
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR (255) NOT NULL,
    email VARCHAR (255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id INT NOT NULL,
    FOREIGN KEY (role_id) REFERENCES roles(id)
);
CREATE TABLE categories(
  id INT AUTO_INCREMENT PRIMARY KEY ,
  nom VARCHAR (255) NOT NULL,

);
CREATE TABLE tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL
);
CREATE TABLE wikis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre_wiki VARCHAR(255) NOT NULL,
    contenu TEXT NOT NULL,
    date_creation DATE NOT NULL,
    categorie_id INT NOT NULL,
    FOREIGN KEY (categorie_id) REFERENCES categories(id),
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
  CREATE TABLE Tag_Article(
    id INT AUTO_INCREMENT PRIMARY KEY,
categorie_id INT NOT NULL,
    FOREIGN KEY (categorie_id) REFERENCES categories(id),
tag_id INT NOT NULL,
    FOREIGN KEY (tag_id) REFERENCES tags(id),
  )
 