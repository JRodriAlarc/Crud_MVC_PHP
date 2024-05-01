-- Active: 1694719080083@@127.0.0.1@3306
CREATE DATABASE crud_php_mysql
    DEFAULT CHARACTER SET = 'utf8mb4';

USE crud_php_mysql;

CREATE Table persona(
    idPersona INTEGER AUTO_INCREMENT,
    nombre VARCHAR(32) NOT NULL,
    apellido VARCHAR(32) NOT NULL,
    dni CHAR(18) UNIQUE NOT NULL,
    fechaNacimiento DATE NOT NULL,
    correo VARCHAR(60) NOT NULL,
    PRIMARY KEY (idPersona)
);
    

INSERT INTO persona 
    (nombre, apellido, dni, fechaNacimiento, correo) 
VALUES 
    ("Juan", "Pérez", "PHJP890224HHGDLNV0", '1989-02-24', "JuanP3rez@mail.com"),
    ("Pedro", "Torrez", "TGPA001018VRGSHCV1", '2000-10-18', "PedroTorrez2@mail.com")

SHOW TABLES

SELECT * FROM persona