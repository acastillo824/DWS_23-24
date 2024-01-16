USE Chess;

DROP TABLE IF EXISTS T_BoardStatus;
DROP TABLE IF EXISTS T_Matches;
DROP TABLE IF EXISTS T_Players;

/*Todos los ID deben ser autoincrement*/

CREATE TABLE T_Players(
	ID int auto_increment,
    namePlayer varchar(30) not null unique,
    email varchar(50) not null unique,
    passwd varchar(100) not null,
    profileType varchar(15) not null,	
    PRIMARY KEY (ID)
);

CREATE TABLE T_Matches(
	ID INTEGER AUTO_INCREMENT,
    title varchar(20),
    white int not null,
    black int not null,
    startDate datetime not null,
    endDate datetime,
    winner varchar(10),
    status varchar(20) not null default('En Curso'),
    foreign key (white) references T_Players(ID),
    foreign key (black) references T_Players(ID),
    PRIMARY KEY (ID)
);

create table T_BoardStatus(
	ID int auto_increment,
    ID_Match int,
    board varchar(200),
    foreign key (ID_Match) references T_Matches(ID),
    primary key (ID, ID_Match)
);




 
SELECT ID, namePlayer, email, passwd, profileType FROM T_Players; 























/*Tabla A*/
/* SELECT 
	ID,
    name 
FROM 
	T_Players; */
    
/*Tabla B*/

/* SELECT
    ID as 'ID Partida',
    white as 'ID_Jugador_Blancas',
    black as 'ID_Jugador_Negras'
FROM
	T_Matches; */
    
/*Campo de pruebas*/

/* select
	T_Matches.ID,
    title,
    startDate,
    status,
    winner,
    endDate,
    T_Players1.name as 'Jugador_Blancas',
    T_Players2.name as 'Jugador_Negras'
from
	T_Matches 
inner join T_Players as T_Players1 on T_Players1.ID = T_Matches.white
inner join T_Players as T_Players2 on T_Players2.ID = T_Matches.black; */
    
    
    
    
    