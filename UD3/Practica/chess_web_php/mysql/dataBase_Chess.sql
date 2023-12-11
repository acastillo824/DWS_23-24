USE Chess;

DROP TABLE IF EXISTS T_BoardStatus;
DROP TABLE IF EXISTS T_Matches;
DROP TABLE IF EXISTS T_Players;

/*Todos los ID deben ser autoincrement*/

CREATE TABLE T_Players(
	ID int auto_increment,
    name varchar(30) not null unique,
    email varchar(50) not null unique,
    passwd varchar(30) not null,
    PRIMARY KEY (ID)
);

CREATE TABLE T_Matches(
	ID INTEGER AUTO_INCREMENT,
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

insert into T_Players (name, email, passwd) VALUE ('Adrian','acastillolopez@iessonferrer.net','Ageofempires1'),
													('Okolo', 'danielokolo@iessonferrer.net', 'Ageofempires2'),
                                                    ('Elier', 'eliervazquez@iessonferrer.net', 'Ageofempires3');