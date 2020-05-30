create database if not exist pictures
	use files;
	create table if not exist  pic
		(
imageid int not null ,
image blob,
primary key('imageid')
	);