create database ddgemini;
use ddgemini;

create table usuario(
	id int auto_increment primary key,
    nome varchar(70) not null,
    email varchar(100) not null unique,
    senha varchar(100) not null
)