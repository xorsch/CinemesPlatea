
-- v0.4.0 update 24-02-09
-- CREATE DATABASE cineclub;


DROP DATABASE IF EXISTS cineclub;
CREATE DATABASE cineclub;
USE cineclub;

-- creació de la base de dades.

CREATE TABLE Membres (

    idMembre BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    pass VARCHAR(20) NOT NULL ,
    nom VARCHAR(20) NULL ,
    cognom VARCHAR(20) NULL ,
    email VARCHAR(20) NOT NULL UNIQUE,
    adreca VARCHAR(40) NOT NULL ,
    telefon VARCHAR(12) NULL ,

    INDEX (idMembre)
);


-- si elimines un membre cal:
-- - que no tingui cap producte actiu
-- - eliminar els gustos del membre
-- - eliminar les tarjetes si ningú altre les usa


-- creacio

CREATE TABLE Productes (

    idProducte BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    nomProd VARCHAR(20) NOT NULL UNIQUE ,
    cost DECIMAL(5, 2) ,
    descripcio TEXT NULL ,
    durada INT ,

    INDEX (idProducte)
);

-- Nomès es pot eliminar un producte si cap membre està subscrit
-- o encara està en vigència.


-- creacio

-- Només es pot crear una tarjeta si tots el elements estan plens i
-- s'assigna algún membre.
-- el bin pot tenir de 13 a 19 dígits, però es mostren 16 màxim.


CREATE TABLE Tarjetes (

    idTarjeta BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    entidad VARCHAR(20) NULL ,
    titular VARCHAR(20) NULL ,
    bin VARCHAR(16) NULL UNIQUE ,
    caduca VARCHAR(4) NULL ,
    cvv VARCHAR(3) NULL ,

    activa TINYINT NOT NULL,

    INDEX (idTarjeta)
);


-- Si cap usuàri usa una tarjeta cal eliminarla i ?


-- creacio
-- Només es crea si es crea un usuari


CREATE TABLE MembreGustos (

    idMembre BIGINT NOT NULL UNIQUE,
    mail_info TINYINT DEFAULT '1',
    mail_new TINYINT DEFAULT '1',
    cookie_perm TINYINT DEFAULT '1',
    cookie_func TINYINT DEFAULT '1',

    INDEX (idMembre) ,
    FOREIGN KEY(idMembre) REFERENCES Membres (idMembre)
);


-- Només s'elimina quan s'elimina un usuari.


-- creació

-- Un usuari pot tenir mùltiples tarjetes
-- i una tarjeta la poden tenir múltiples usuaris


CREATE TABLE MembreTarjeta (

   idMembre BIGINT NOT NULL,
   idTarjeta BIGINT NOT NULL,
   activa TINYINT NULL,
   idMembdreTarjeta BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,

   FOREIGN KEY(idMembre)  REFERENCES Membres  (idMembre),
   FOREIGN KEY(idTarjeta) REFERENCES Tarjetes (idTarjeta)
);


-- Si s'elimina cal veure si la tarjeta encara qui l'usa.

-- create
-- MembreProductesTarjetes Podria dir-se transaccion.

CREATE TABLE MembreProducte (

    idMembre   BIGINT NOT NULL ,
    idProducte BIGINT NOT NULL ,
    idTarjeta  BIGINT NOT NULL ,

    alta DATE NULL ,
    expira DATE NULL ,
    autorenovacio TINYINT ,
    cobrat TINYINT,

    INDEX (idMembre),
    INDEX (idProducte),

    FOREIGN KEY(idMembre)   REFERENCES Membres   (idMembre),
    FOREIGN KEY(idProducte) REFERENCES Productes (idProducte),
    FOREIGN KEY(idTarjeta)  REFERENCES Tarjetes  (idTarjeta)
);


-- Crear dades per fer tests

INSERT INTO Membres VALUES ( 1, '1234', 'Jordi', 'Dels munts', 'jpa@gmail.com', 'Pujada del tranvia, Manacor', '900609060' );
INSERT INTO Membres VALUES ( 2, '1234', 'Jaume', 'Lopez', 'jaume@gmail.com', 'Av Barcelona, Sort', '900609061' );
INSERT INTO Membres VALUES ( 3, '1234', 'Laia', 'Sánchez', 'laia@gmail.com', 'Diagonal 12, Gavà', '900609061' );

INSERT INTO MembreGustos VALUES ( 1, 1, 1, 1, 1 );
INSERT INTO MembreGustos VALUES ( 2, 1, 1, 1, 1 );
INSERT INTO MembreGustos VALUES ( 3, 1, 1, 1, 1 );

INSERT INTO Productes VALUES ( 1, 'Crític', 25.55, 'Veure 30min de película', 10);
INSERT INTO Productes VALUES ( 2, 'Gandul',  5.55, 'Dret a seure', 1);
INSERT INTO Productes VALUES ( 3, 'Assedegat', 95.55, 'Begudes gratuites 1 sessió', 1);

INSERT INTO Tarjetes VALUES ( 1, 'visa', 'Jordi','1111111111111111','0128','321',0);
INSERT INTO Tarjetes VALUES ( 2, 'mastercard', 'Jaume','1112111211121112','128','321',0);
INSERT INTO Tarjetes VALUES ( 3, 'visa','Jaume Pere','1113111311131113','128','321',0);
INSERT INTO Tarjetes VALUES ( 4, 'visa', 'Laia','1114111411141114','0128','321',0);

INSERT INTO MembreTarjeta VALUES ( 1, 1, 1, null);
INSERT INTO MembreTarjeta VALUES ( 2, 2, 1, null);
INSERT INTO MembreTarjeta VALUES ( 2, 3, 1, null);
INSERT INTO MembreTarjeta VALUES ( 3, 4, 1, null);

INSERT INTO MembreProducte VALUES ( 1, 1, 1, '2024-04-01', '2024-05-01', 1, 0 );
INSERT INTO MembreProducte VALUES ( 1, 3, 1, '2024-04-01', '2024-05-01', 0, 0 );
INSERT INTO MembreProducte VALUES ( 2, 1, 2, '2024-04-02', '2024-05-02', 1, 0 );
INSERT INTO MembreProducte VALUES ( 2, 2, 3, '2024-04-03', '2024-05-03', 1, 0 );
INSERT INTO MembreProducte VALUES ( 2, 3, 3, '2024-04-05', '2024-05-05', 0, 0 );
INSERT INTO MembreProducte VALUES ( 3, 1, 4, '2024-04-04', '2024-05-04', 0, 0 );

-- Consultes

-- Usuari
-- Usuari i els seus gustos -> Membres, MembreGustos
-- Usuari i les seves tarjetes -> Membres, Tarjetes - MembreTarjetes.
-- Usuari i el seus productes  -> Membres, Productes - MembreProductes.

-- Productes
-- Productes i el seus usuaris -> Producte, Membres - MembreProductes.

-- Tarjetes
-- Tarjetes i els seus usuaris -> Tarjetes, Membres - MembresTarjetes.

-- Accions

-- Alta usuari
-- Baixa usuari

-- Alta Tarjeta
-- Baixa Tarjeta

-- Contractar producte
-- Baixa producte
-- Cobrar producte
-- Productes amb tarjeta caducada ?
-- Productes sense pagar ?

