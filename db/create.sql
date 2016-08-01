create database keyrate;
use keyrate;
create table user(
  id int not null AUTO_INCREMENT,
  name varchar(64) not null,
  password varchar(128) not null,
  PRIMARY KEY (id)
);
desc user;
create table record(
  id int not null AUTO_INCREMENT,
  userid int not null,
  picurl varchar(255) not null,
  record int not null,
  time time not null,
  PRIMARY KEY (id)
);
desc record;
create table share(
  id int not null AUTO_INCREMENT,
  userid int not null,
  picurl varchar(255) not null,
  message varchar(255) not null,
  PRIMARY KEY (id)
);
desc share;
