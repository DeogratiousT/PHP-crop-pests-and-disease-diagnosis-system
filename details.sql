create database if not exists details;
use details;
create table if not exists detail
(
fullname varchar(30) not null,
phonenumber int  primary key,
applicationletter varchar (2500),
document varchar(4500),
email varchar(15)
);
