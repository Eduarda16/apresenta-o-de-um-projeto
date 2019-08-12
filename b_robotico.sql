show databases;
create database B_Robotico;
use B_Robotico;


create table visitante(
id int(11) unsigned not null auto_increment,
nome varchar(60) not null,
dataNascimento date not null,
telefone varchar(30) not null,
curso varchar(30) not null,
primary key(id)
);



