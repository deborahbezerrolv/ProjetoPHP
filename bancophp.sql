create database grupo01php;

use grupo01php;

create table cliente(
id int (11) not null primary key auto_increment,
usuario varchar (45) not null unique,
email varchar (45) not null unique,
senha varchar (16) not null
);

