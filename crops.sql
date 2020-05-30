create database if not exists crop;
use crop;

create table if not exists farmers
	(
		username varchar(20) not null ,
		idnumber varchar(25) primary key not null,
		email varchar(25) not null, 
		password varchar(25) not null ,
		confpassword varchar(25) not null 
		);
