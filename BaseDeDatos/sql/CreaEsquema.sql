DROP DATABASE IF EXISTS biblioteca;

CREATE DATABASE IF NOT EXISTS biblioteca;

USE biblioteca;

CREATE table materias(
id          int(10) auto_increment not null,
nombre      varchar(100) not null,
año         int(4) not null,
division    int(4) not null,
CONSTRAINT pk_materias PRIMARY KEY(id)
)ENGINE=InnoDb;
