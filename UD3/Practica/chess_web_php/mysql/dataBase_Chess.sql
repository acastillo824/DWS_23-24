USE Chess;

DROP TABLE IF EXISTS T_Players;
DROP TABLE IF EXISTS T_Games;
DROP TABLE IF EXISTS T_BoardStatus;

/*Todos los ID deben ser autoincrement*/

CREATE TABLE T_Players(
	ID INTEGER auto_increment,
    nick varchar(100),
    email varchar(100),
    passwd password,
    PRIMARY KEY (ID)
);

CREATE TABLE T_Games(
	ID INTEGER AUTO_INCREMENT,
    PRIMARY KEY (ID)
);