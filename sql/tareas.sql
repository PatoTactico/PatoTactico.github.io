use alumno_1;
create table tareas (
    idTarea int not null auto_increment,
    matTarea varchar(50) not null,
    nomTarea varchar(50) not null,
    descTarea varchar(500) not null,
    fechaTarea date not null,
    horaTarea time not null,
    estadoTarea varchar(50) not null,
    semTarea int not null,
    grupoTarea varchar(1) not null,
    primary key (idTarea)
);

DROP TABLE tareas;