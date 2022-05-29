create database alumno_1;
use alumno_1;
create table alumno (
    id int not null auto_increment,
    ap varchar(50) not null,
    am varchar(50) not null,
    nom varchar(50) not null,
    sem int not null,
    esp varchar(50) not null,
    primary key (id)
);

DELETE FROM alumno WHERE id;


insert into alumno (id ,ap, am, nom, sem, esp) values ('9','Test', 'Test', 'Test', '1', 'Test');