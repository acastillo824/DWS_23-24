CREATE SCHEMA Chess;

USE Chess;
DROP TABLE IF EXISTS T_BoardStatus;
DROP TABLE IF exists T_Matches;
DROP TABLE IF exists T_Players;

CREATE TABLE T_Players(
ID int primary key auto_increment,
name varchar(30) not null,
email varchar(50) UNIQUE,
passwd varchar(30) not null
);

CREATE TABLE T_Matches(
ID int primary key auto_increment,
title varchar(50) not null,
white int not null,
black int not null,
startDate datetime not null,
endDate datetime,
winner varchar(10),
status varchar(20) not null default("En curso"),
    FOREIGN KEY (white) REFERENCES T_Players(ID),
    FOREIGN KEY (black) REFERENCES T_Players(ID)
);

CREATE TABLE T_BoardStatus(
ID int auto_increment, 
IDGame int,
board varchar(200), /* Modificar si es necesario */
primary key(ID,IDGame),
FOREIGN KEY (IDGame) REFERENCES T_Matches(ID)
);