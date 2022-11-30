drop database if exists curso_sql;

create database if not exists curso_sql;

use curso_sql;

#Indice

#Primary
#index
#unique

#show index;

#indice Primary
create table if not exists libro(
id int unsigned auto_increment not null,
titulo varchar(100),
autor varchar(50),
descripcion text,
editorial varchar(15),
primary key(id)
);

show index from libro; #mostrar indices de una tabla
show index from libros;


drop table libros;

#tipo index comun
create table if not exists libros(
id int unsigned auto_increment not null,
titulo varchar(100),
autor varchar(50) not null,
descripcion text,
editorial varchar(15) not null,
primary key(id),
index i_autoreditorial (autor, editorial)
);
#agregamos los indices en este caso autor y editorial se hace con la "i_" para mejor lectura
#se puede hacer individual "i_editorial(editorial)"


#tipo unique (unico)
create table if not exists libros(
id int unsigned auto_increment not null,
titulo varchar(100),
autor varchar(50) not null,
descripcion text,
editorial varchar(15) not null,
primary key(id),
index i_autor(autor),
unique uq_titulo(titulo)
);
#que no haya otro registro con esos mismos datos

show index from libros;

select * from libros;

insert into libros(titulo, autor, editorial) values('Java en 10 minutos', 'Alejandro', 'La Maravilla');
insert into libros(titulo, autor, editorial) values('Java', 'Alejandro', 'La Maravilla');

#Eliminar un indice
drop index i_autor on libros;
drop index uq_titulo on libros;

#Crear indice en una tabla existente
create index i_editorial on libros (editorial);
create unique index uq_titulo on libros (titulo);

create table if not exists libros(
id int unsigned auto_increment not null,
titulo varchar(100),
autor varchar(50) not null,
descripcion text,
editorial varchar(15) not null,
primary key(id)
);
drop table libros;
show index from libros;

select * from libros;

#Index, ayuda a los resultados, se usan para buscar rapidamente, y para emplear join

#primary --- no se pueden repetir, claves primarias
#index -- crea un indice común, podemos darle un nombre y pueden haber varios
#unique -- valor sea unico (correos, telefonos...)

#una tabla puede tener hasta 64 indices 