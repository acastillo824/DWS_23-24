/*Actividad 1*/
select 
tp.ID,
tp.titulo,
tp.año,
tp.duracion,
tp.sinopsis,
tp.votos
from T_Peliculas tp
where tp.id_categoria = 1
order by votos desc;

/*Actividad 2*/

select 
tp.ID,
tp.titulo,
tp.año,
tp.duracion,
tp.sinopsis,
tp.votos
from T_Peliculas tp
where tp.id_categoria = 1
order by votos desc;

/*Actividad 3*/

select 
tp.ID,
tp.titulo,
tp.año,
tp.duracion,
tp.sinopsis,
tp.votos,
td.nombre
from T_Peliculas tp 
inner join T_Directores td on tp.id_director = td.id
where tp.id_categoria = 1
order by votos desc;

/*Actividad 4*/

select 
tp.ID,
tp.titulo,
tp.año,
tp.duracion,
tp.sinopsis,
tp.votos,
td.nombre,
ta.nombre
from T_Peliculas tp 
inner join T_Directores td on tp.id_director = td.id
inner join T_Actor_Pelicula tap on tap.ID_pelicula = tp.ID
inner join T_Actores ta on ta.id = tap.id_actor
where tp.id = 6;

/*Actividad 5*/

select tc.ID,tc.nombre, avg(tp.duracion) 
from T_Peliculas tp 
inner join T_Categorias tc on tp.id_categoria = tc.ID
group by tc.ID, tc.nombre