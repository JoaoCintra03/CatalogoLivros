CREATE DATABASE catalogo CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE catalogo;

CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL
);
