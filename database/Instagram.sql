create database immo;
use immo;

create table client(id_client int primary key auto_increment,cin int ,nom varchar(20),prenom varchar(20),email varchar(50),password varchar(30));
create table typeImmo(id_type int primary key auto_increment, libelle varchar(20));
create table immobilier(id_immobilier int primary key auto_increment,titre varchar(20), prixlocation float,id_type int references typeImmo(id_type),disponible varchar(3));
create table location (id_location int primary key auto_increment, id_immobilier int references immobilier(id_immobilier), id_client int references client(id_client), date_debut_location date, date_fin_location date);

alter table immobilier add constraint check(disponible in ('oui','non'));

insert into client values (null,810311,"FIGUIGUI","Anass","anas.production.af@gmail.com","123456");
insert into location(id_location,id_immobilier,id_client,date_debut_location,date_fin_location) values (null,1,2,'2021-12-14','2022-07-01'),(null,1,3,'2019-03-13','2021-07-23'),(null,1,4,'2022-07-01','2022-08-01'),(null,3,3,'2022-03-13','2022-09-23');