
create database buscas;

create table pessoa (
 id serial not null,
 nome varchar(50) not null,
 sobrenome varchar(50) not null,
 sexo char(1) not null,
 primary key(id)
);

insert into pessoa (nome,sobrenome,sexo) values ('João Pedro','da Silva','M');
insert into pessoa (nome,sobrenome,sexo) values ('João Paulo','dos Santos','M');
insert into pessoa (nome,sobrenome,sexo) values ('Pedro','dos Santos','M');
insert into pessoa (nome,sobrenome,sexo) values ('Paulo','Santos','M');
insert into pessoa (nome,sobrenome,sexo) values ('Lucas','Almeida','M');
insert into pessoa (nome,sobrenome,sexo) values ('Paulo','de Carvalho','M');
insert into pessoa (nome,sobrenome,sexo) values ('Maria','Oliveira','F');
insert into pessoa (nome,sobrenome,sexo) values ('Maria José','Oliveira','F');
insert into pessoa (nome,sobrenome,sexo) values ('José Maria','de Assis','M');
insert into pessoa (nome,sobrenome,sexo) values ('Mariana','Camargo','F');
insert into pessoa (nome,sobrenome,sexo) values ('Ana','Duarte','F');
insert into pessoa (nome,sobrenome,sexo) values ('Ana Maria','Arruda','F');
insert into pessoa (nome,sobrenome,sexo) values ('Ana Mara','Bueno','F');
insert into pessoa (nome,sobrenome,sexo) values ('Anna','Simões','F');



