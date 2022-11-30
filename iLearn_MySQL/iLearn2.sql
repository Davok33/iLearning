#DROP DATABASE IF EXISTS curso_sql;

SHOW databases;

CREATE database IF NOT EXISTS curso_sql;

USE curso_sql;

CREATE TABLE IF NOT EXISTS usuario(
nombre varchar(50),
apellido varchar(50),
correo varchar(100),
primary key(nombre)
);

INSERT INTO usuario VALUES('Juan', 'Perez', 'juan@juan.com');

DESCRIBE usuario;

CREATE TABLE IF NOT EXISTS producto(
id int(11) auto_increment,
 producto varchar(50),
 descripcion text,
 precio float(11,2),
 primary key(id)
);

DESCRIBE producto;

INSERT INTO producto VALUES(null,'Laptop','la mejor del mercado',128.6);
INSERT INTO producto VALUES(null,'Mouse','Luces RGB',5.8);

SELECT * FROM producto;

CREATE TABLE persona(
id integer unsigned not null,
nombre varchar(50),
edad integer unsigned,
primary key(id)
);

INSERT INTO persona VALUES(

SELECT * FROM persona;