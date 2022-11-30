create table if not exists libros(
id int unsigned auto_increment,
titulo varchar(40) not null,
editorial varchar(15),
autor varchar(30) default 'Desconocido',
precio decimal(5.2) unsigned default 8.25,
cantidad mediumint unsigned not null,
primary key(id)
);

#zerofill da la longitud de ceros por los cual se empieza, ejm cambio 
#id int(6) zerofill auto_increment,     empieza 000001 

insert into libros(titulo, editorial, autor, precio, cantidad) values('C# en una hora', 'SQL', 'Miguel', 15.2, 50);
insert into libros(editorial, autor, cantidad) values('ssf', 'Juan', 20);   #da error porque hay valor not null y nos obliga a poner titulo...
insert into libros(titulo, cantidad) values('carro', 100);

update libros set titulo = 'Java' where titulo = 'carro';     #actualiza el titulo a 'Java'

select * from libros;

drop table libros;