create database veterinario;

use veterinario;

create table login(
id int (15) not null unique,
usuario varchar (45) not null unique,
email varchar (45) not null unique,
senha varchar (16) not null
);


insert into login (id, usuario, email, senha) values ('13898','admin', 'admin@gmail.com', '1234');
insert into login (id, usuario, email, senha) values ('13899','colaboradorvet', 'colabvet@gmail.com' '4321');