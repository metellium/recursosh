create database pekxel;
use pekxel;

select * from tbl_empleado;
select * from tbl_datos_economicos;
select * from tbl_lenguajes;
select * from tbl_conocimientos;

create view resumen as select nombre, edad, direccion, estado, fecha_nacimiento, telefono, puesto, salario,lenguaje,porcentaje, curso
from tbl_empleado
inner join tbl_datos_economicos
on tbl_empleado.id = tbl_datos_economicos.tbl_empleado_id
inner join tbl_conocimientos
on tbl_empleado.id= tbl_conocimientos.tbl_empleado_id
inner join tbl_lenguajes
on tbl_lenguajes.id=tbl_conocimientos.tbl_lenguajes_id;

