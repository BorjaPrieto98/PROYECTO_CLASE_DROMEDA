CREATE DATABASE IF NOT EXISTS dromedadb;

USE dromedadb;

CREATE TABLE tUser(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL,
    nombre_usuario VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    encrypted_password VARCHAR(100) NOT NULL,
    coins INTEGER,
    active_session_token CHAR(20)
);

CREATE TABLE tCartas(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(120) NOT NULL,
    tipo VARCHAR(100) NOT NULL,
    rareza VARCHAR(3) NOT NULL,
    precio INTEGER NOT NULL
);

CREATE TABLE tUser_carta{
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_user INTEGER,
    id_carta INTEGER,
    cantidad INTEGER,
    
    FOREIGN KEY (id_user) REFERENCES tUser(id),
    FOREIGN KEY (id_carta) REFERENCES tCartas(id)
};

INSERT INTO tcartas (nombre, imagen, rareza, precio) VALUES ('Nathanziel', '', 'NOR', '2000');