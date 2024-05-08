create database veterinario;

use veterinario;

create table login(
usuario varchar (45) not null unique,
senha int (16) not null
);

select * from login;

insert into login (usuario, senha) values ('admin', '1234');

insert into login (usuario, senha) values ('colaboradorvet', '4321');

alter table login add column id int (15) not null;

drop table login;

create table login(
id int (15) not null unique,
usuario varchar (45) not null unique,
senha int (16) not null
);


insert into login (id, usuario, senha) values ('13898','admin', '1234');
insert into login (id, usuario, senha) values ('13899','colaboradorvet', '4321');