create database veterinario;

use veterinario;

create table login(
id int (15) not null unique,
usuario varchar (45) not null unique,
senha int (16) not null
);


insert into login (id, usuario, senha) values ('13898','admin', '1234');
insert into login (id, usuario, senha) values ('13899','colaboradorvet', '4321');