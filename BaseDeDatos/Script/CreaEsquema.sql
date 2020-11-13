DROP DATABASE IF EXISTS biblioteca;

CREATE DATABASE IF NOT EXISTS biblioteca;

USE biblioteca;

CREATE table materias(
id          int(10) auto_increment not null,
nombre      varchar(100) not null,
año         int(4) not null,
division    int(4) not null,
logo        varchar(200),
CONSTRAINT pk_materias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE table alumnos(
numero_doc          int(10) not null,
tipo_doc    varchar(50),
nombre      varchar(100) not null,
apellido        varchar(200),
año         int(4) not null,
division    int(4) not null,
CONSTRAINT pk_alumnos PRIMARY KEY(numero_doc)
)ENGINE=InnoDb;

CREATE table curso(
id_curso int(10) auto_increment not null,
doc_alumno int(10) not null,
id_materia int(10) not null,
CONSTRAINT	pk_curso PRIMARY KEY(id_curso),
CONSTRAINT	fk_akumnos FOREIGN KEY(doc_alumno) REFERENCES alumnos(numero_doc),
CONSTRAINT	fk_materias FOREIGN KEY(id_materia) REFERENCES materias(id)
)ENGINE=InnoDb;
