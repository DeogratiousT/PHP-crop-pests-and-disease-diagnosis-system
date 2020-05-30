create database if not exist pictures
	use files;
	create table if not exist  'test'.'pic'
		(
id int not null ,
image blob ,
name varchar(11)
	);