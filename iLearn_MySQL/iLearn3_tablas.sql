use curso_sql;

drop table if exists producto;


create table if not exists productos(
id integer unsigned not null auto_increment,
nombre varchar(50),
proveedor varchar(50),
descripcion text,
precio decimal(5,2) unsigned,
cantidad smallint unsigned,
primary key(id)
);

insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Laptop HP','HP','Las mejores laptops', 155.69, 50);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Mouse','Logitech','Los mejores Mouse', 20.86, 30);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Teclado','Logitech','Los mejores teclados', 80.12, 100);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Laptop Dell','DELL','Las mejores laptops', 200.8, 15);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Pantalla','HP','Las mejores pantallas', 155.69, 50);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Impresora HP','HP','Las mejores impresoras', 155, 70);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Camaras','Logitech','Las mejores camaras', 500, 20);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Xbox','Microsoft','La mejor Xbox', 103, 10);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Play Station','Sony','La mejor Play Station', 15.69, 50);
insert into productos(nombre, proveedor, descripcion, precio, cantidad) values('Lenovo 310','Lenovo','Las mejores Laptops', 155.69, 50);

select * from productos;

select nombre, precio, cantidad from productos;

select nombre, precio, cantidad, precio*cantidad from productos;

select nombre, precio, precio*0.1, precio-(precio*0.1) from productos;   #precio del 10% y despues te muestra el precio con el 10% en total

#Funciones de manejo de cadenas
select concat('Hola', ' ', 'como estás');
select concat_ws('-', 'Miguel', 'Lopez', 'Martinez');
select length('Hola a todos');
select left('Buenas Noches', 8);
select right('Buenas tardes', 10);
select ltrim('     davok     ');
select rtrim('     davok2    ');
select trim('    dc   ');
select replace('xxx.udemy.com','x','w'); #reemplaza el caracter 
select repeat('SQL ', 5);
select reverse('Hola');
select lower('HolA Como EStas');
select lcase();
select upper('Hola Como eStas');
select ucase();

select concat_ws('/', nombre, precio) from productos;
select left(nombre, 5) from productos;
select lower(nombre), upper('descripcion') from productos;


#Funciones Matemáticas
select nombre, precio from productos;

select ceiling(precio) from productos;   #redondea arriba
select floor(precio) from productos;	#redondea hacia abajo
select mod(10, 3);	#devuelve residuo de la division
select power(2,3);	#elevado
select round(20.60);	#redondea hacia arriba o abajo


#ORDER BY

select nombre, descripcion, precio, cantidad from productos order by nombre; 	#ordena por nombre
select nombre, precio, cantidad from productos order by nombre desc;		#desendente
select nombre, precio, cantidad from productos order by nombre desc, precio asc;

#AND, OR, NOT

and = "y"
or = "y/o"
xor = "o"
not = "no"


select * from productos where (proveedor = 'HP') and (precio <= 200);	#se deben cumplir las 2 condiciones
select * from productos where (proveedor = 'HP') or (descripcion = 'Las mejores laptops');
select * from productos where (proveedor = 'HP') xor (precio <= 200);
select * from productos where not (proveedor = 'Logitech'); #Traae todos los registros excepto los que tenga proveedor logitech


#Operadores Realacionales Between - in

select * from productos where precio >= 100 and precio <= 160;
select * from productos where precio between 100 and 160;
select * from productos where not precio between 100 and 160;
select * from productos where proveedor = 'HP' or descripcion = 'Las mejores laptops';
select * from productos where proveedor in('HP', 'La mejor laptop');


#Busquedas de patrones Like y No-like

select * from productos where descripcion = 'La mejor laptop';
select * from productos where descripcion like '%laptop%';
select * from productos where nombre like 'm%';


#REGEXP

select * from productos where proveedor regexp 'logi'; 
select * from productos where proveedor regexp '[hei]';
select * from productos where proveedor regexp '[a-d]';		#desde la a hasta la d
select * from productos where proveedor regexp 'o..i';		#empieze con la letra D
select * from productos where proveedor regexp '^D';
select * from productos where proveedor regexp 'a.*a';


#Count
select * from productos;
select count(*) from productos;
select count(*) from productos where proveedor = 'HP';
select count(*) from productos where descripcion like '%laptop%';


#MAX-MIN-SVG
select * from productos;
select sum(cantidad) from productos;
select sum(cantidad) from productos where proveedor = 'HP';
select max(precio) from productos;
select min(precio) from productos;
select min(precio) from productos where nombre like '%laptop%';
select avg(precio) from productos where nombre like '%laptop%';



#GROUP BY
#iLearn4



#distinct
select * from productos;
select distinct proveedor from productos; #me trae el unico proveedor
select distinct proveedor from productos group by proveedor asc;



