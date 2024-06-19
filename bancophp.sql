create database grupo01php;
use grupo01php;

create table cliente(
id int (15) not null primary key auto_increment,
nome varchar(60) not null,
usuario varchar (45) not null unique,
email varchar (45) not null unique,
senha varchar (16) not null
);

create table consulta(
id_consulta int(5) not null primary key auto_increment,
cpf int(11) not null,
nome_animal varchar(40) not null,
especie varchar(40) not null,
idade int(3) not null,
alergia bool not null,
cirurgia bool not null,
tel int(11) not null,
data_cons date not null,
horario time not null
);

ALTER TABLE consulta
ADD CONSTRAINT fk_id_cliente
FOREIGN KEY (id_cliente)
REFERENCES cliente (id);

ALTER TABLE consulta
ADD CONSTRAINT fk_usuario_cliente
FOREIGN KEY (usuario_cliente)
REFERENCES cliente (usuario);

ALTER TABLE consulta
ADD CONSTRAINT fk_email_cliente
FOREIGN KEY (email_cliente)
REFERENCES cliente (email);


ALTER TABLE consulta
ADD COLUMN id_cliente INT;

ALTER TABLE consulta
ADD COLUMN usuario_cliente varchar(45);

ALTER TABLE consulta
ADD COLUMN email_cliente varchar(45);



select * from cliente;
select * from consulta;                                                                                                                                                                                                                                                                                                                  

drop table cliente;
drop table consulta;
