drop database crud;
create database crud;
use crud;

create table people(
  id int primary key auto_increment,
  name varchar(50) not null,
  cpf varchar(30) not null,
  rg varchar(30) not null,
  email varchar(50) not null,
  marital_status varchar(30) not null,
  birth_date date not null,
  gender varchar(30) not null,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO people (id, name, cpf, rg, email, marital_status, birth_date, gender, created_at)
VALUES (NULL, 'Allan', '123.123.123-12', '12.123.123-12', 'allan@allan.com', 'Namorando', '2000-06-30', 'Masculino', CURRENT_TIMESTAMP);
