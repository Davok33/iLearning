select ciudad, count(*) from visitantes group by ciudad;
select sexo, sum(montocompra) from visitantes group by sexo;

select sexo, max(montocompra), min(montocompra) from visitantes group by sexo; 
#siempre seleccionar la tabla que vamos a agrupar

select ciudad, sexo, count(*) from visitantes group by ciudad, sexo;
select ciudad, count(*) from visitantes where  ciudad <> 'Cordoba' group by ciudad;
#trae todos los registros diferentes a Cordoba

select ciudad, count(*) from visitantes group by ciudad desc;
#de manera descendente
