#########################################################################
#DROP TABLE athlete;
CREATE TABLE athlete 
(
  idAthlete SMALLINT NOT NULL AUTO_INCREMENT,
  prenomAthlete VARCHAR (25),
  nomAthlete VARCHAR (25),
  courriel varchar (50),
  noSport SMALLINT NOT NULL,
  genre CHAR(1) NOT NULL,
  dateNaissance date,
  noRegion SMALLINT,
  PRIMARY KEY (idAthlete)
);

insert into athlete (prenomAthlete, nomAthlete, noSport, genre, dateNaissance, courriel, noRegion) values ('Jean', 'Tremblay', 1, 'M', '2001-01-01','nancy.bluteau@collegealma.ca',8);
insert into athlete (prenomAthlete, nomAthlete, noSport, genre, dateNaissance, courriel, noRegion) values ('Nancy', 'Bluteau', 2, 'F', '2002-02-02','nancy.bluteau@collegealma.ca', 4);
insert into athlete (prenomAthlete, nomAthlete, noSport, genre, dateNaissance, courriel, noRegion) values ('Paul', 'Simard', 3, 'M', '2003-03-03','nancy.bluteau@collegealma.ca', 3);
insert into athlete (prenomAthlete, nomAthlete, noSport, genre, dateNaissance, courriel, noRegion) values ('Marie', 'Potvin', 4, 'F', '2000-10-25','nancy.bluteau@collegealma.ca', 2);
insert into athlete (prenomAthlete, nomAthlete, noSport, genre, dateNaissance, courriel, noRegion) values ('Charles', 'Bouchard', 5, 'M', '2001-10-26','nancy.bluteau@collegealma.ca', 5);

#drop table region;
create table region
(
	idRegion smallint NOT NULL auto_increment,
	nomRegion varchar(50) NOT NULL,
	PRIMARY KEY (idRegion)
);

insert into region (nomRegion) values ('Bas-Saint-Laurent');
insert into region (nomRegion) values ('Saguenay-Lac-St-Jean');
insert into region (nomRegion) values ('Capitale-Nationale');
insert into region (nomRegion) values ('Mauricie');
insert into region (nomRegion) values ('Estrie');
insert into region (nomRegion) values ('Montréal');
insert into region (nomRegion) values ('Outaouais');
insert into region (nomRegion) values ('Abitibi-Témiscamingue');
insert into region (nomRegion) values ('Côte-Nord');
insert into region (nomRegion) values ('Nord-du-Québec');
insert into region (nomRegion) values ('Gaspésie-Îles-de-la-Madelaine');
insert into region (nomRegion) values ('Chaudière-Appalaches');
insert into region (nomRegion) values ('Laval');
insert into region (nomRegion) values ('Lanaudière');
insert into region (nomRegion) values ('Laurentides');
insert into region (nomRegion) values ('Montérégie');
insert into region (nomRegion) values ('Centre-du-Québec');


# drop table sport;
CREATE TABLE sport
(	idSport smallint NOT NULL auto_increment,
	nomSport varchar(40) NOT NULL,
	bloc smallint,
	PRIMARY KEY (idSport)
);

insert into sport (nomSport, bloc) values ('Badminton',2);
insert into sport (nomSport, bloc) values ('Basketball en fauteuil roulant',1);
insert into sport (nomSport, bloc) values ('Boccia',2);
insert into sport (nomSport, bloc) values ('Boxe olympique',2);
insert into sport (nomSport, bloc) values ('Curling',1);
insert into sport (nomSport, bloc) values ('Escrime',1);
insert into sport (nomSport, bloc) values ('Gymnasique',1);
insert into sport (nomSport, bloc) values ('Haltérophilie',2);
insert into sport (nomSport, bloc) values ('Hockey féminin',1);
insert into sport (nomSport, bloc) values ('Hockey masculin',2);
insert into sport (nomSport, bloc) values ('Judo',2);
insert into sport (nomSport, bloc) values ('Nage synchronisée',2);
insert into sport (nomSport, bloc) values ('Patinage artisitque',1);
insert into sport (nomSport, bloc) values ('Patinage de vitesse',1);
insert into sport (nomSport, bloc) values ('Plongeon',1);
insert into sport (nomSport, bloc) values ('Ringuette',2);
insert into sport (nomSport, bloc) values ('Ski alpin',2);
insert into sport (nomSport, bloc) values ('Ski de fond',1);
insert into sport (nomSport, bloc) values ('Taekwondo',1);
insert into sport (nomSport, bloc) values ('Tennis de table',2);
insert into sport (nomSport, bloc) values ('Trampoline',1);
