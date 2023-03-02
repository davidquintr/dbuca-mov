/*basic insert queries*/
insert into facultad (nombre,descripcion,ubicacion) values ('example','significant description','place')

/*to     set 'id_facultad' of the table carrera an foreign key*/
alter table carrera add foreign key (id_facultad) references facultad(id) on delete restrict on update restrict;

select * from facultad;
/*This is for alphabetical order by name, u can alternate 'asc' for 'desc' for invert*/
select * from facultad order by nombre asc;

/*for the search for id or name of 'search_fact.php' is this
for this, search any match in the registry and column 'nombre'
*/
select * from facultad where nombre like '%example%';

select * from facultad where id = 0;