


CREATE TABLE Membre (

    idMembre BIGINT NOT NULL PRIMARY KEY ,
    pass VARCHAR(20) NOT NULL ,
    nom VARCHAR(20) NULL ,
    cognom VARCHAR(20) NULL ,
    email VARCHAR(20) NOT NULL UNIQUE,
    adreca VARCHAR(40) NOT NULL ,
    telefon VARCHAR(12) NULL ,
    
    INDEX(idMembre)
);

-- si elimines un membre cal:
-- - eliminar els gustos del membre
-- - eliminar les tarjetes si ningú altre les usa


-- creacio

CREATE TABLE Productes (

    idProducte BIGINT NOT NULL PRIMARY KEY ,
    nom VARCHAR(20) NOT NULL UNIQUE ,
    preu DECIMAL(5, 2) ,
    descripcio TEXT NULL ,
    durada INT ,
    
    INDEX (idProducte)
);

-- Nomès es pot eliminar un producte si cap membre està subscrit
-- o encara està en vigència.


-- creacio

-- Només es pot crear una tarjeta si tots el elements estan plens i
-- s'assigna algún membre.

CREATE TABLE Tarjeta (

    idTarjeta BIGINT NOT NULL PRIMARY KEY ,
    nom VARCHAR(20) NULL ,
    numero VARCHAR(20) NULL UNIQUE,
    expira VARCHAR(7) NULL ,
    csv VARCHAR(3) NULL ,
    
    INDEX (idTarjeta)
);

-- Si cap usuàri usa una tarjeta cal eliminarla


-- creacio
-- Només es crea si es crea un usuari

CREATE TABLE MembreGustos (

    idMembre BIGINT NOT NULL UNIQUE,
    mail_info TINYINT ,
    mail_new TINYINT ,
    cookie_perm TINYINT ,
    cookie_func TINYINT , 
    
    INDEX (idMembre) ,
    FOREIGN KEY(idMembre) REFERENCES Membre (idMembre)
);

-- Només s'elimina quan s'elimina un usuari.


-- creació

-- Un usuari pot tenir mùltiples tarjetes 
-- i una tarjeta la poden tenir múltiples usuaris

CREATE TABLE MembreTarjeta (

    idMembre BIGINT NULL ,
    idTarjeta BIGINT NULL ,

    FOREIGN KEY(idMembre) REFERENCES Membre (idMembre) ,
    FOREIGN KEY(idTarjeta) REFERENCES Tarjeta (idTarjeta)
);

-- Si s'elimina cal veure si la tarjeta encara qui l'usa.

-- create
CREATE TABLE MembreProducte (

    idMembre BIGINT NOT NULL ,
    idProducte BIGINT NOT NULL ,
    alta DATE NULL ,
    expira DATE NULL ,
    autorenovacio TINYINT ,
    
    INDEX (idMembre),
    INDEX (idProducte),
    
    FOREIGN KEY(idMembre) REFERENCES Membre (idMembre),
    FOREIGN KEY(idProducte) REFERENCES Productes(idProducte)
);


-- Crear dades per fer tests 

INSERT INTO Membre VALUES ( 1, '1234', 'Jordi Pere Arnau', 'Dels munts', 'jpa@gmail.com', 'Pujada del tranvia, Manacor', '900609060' );
INSERT INTO Membre VALUES ( 2, '1234', 'Jaume', 'Lopez', 'jaume@gmail.com', 'Av Barcelona, Sort', '900609061' );
INSERT INTO Membre VALUES ( 3, '1234', 'Laia', 'Sánchez', 'laia@gmail.com', 'Diagonal 12, Gavà', '900609061' );

INSERT INTO MembreGustos VALUES ( 1, 1, 1, 1, 1 );
INSERT INTO MembreGustos VALUES ( 2, 1, 1, 1, 1 );
INSERT INTO MembreGustos VALUES ( 3, 1, 1, 1, 1 );

INSERT INTO Productes VALUES ( 1, 'Crític', 25.55, 'Veure 30min de película', 10);
INSERT INTO Productes VALUES ( 2, 'Gandul',  5.55, 'Dret a seure', 1);
INSERT INTO Productes VALUES ( 3, 'Assedegat', 95.55, 'Begudes gratuites 1 sessió', 1);

INSERT INTO Tarjeta VALUES ( 1, 'Jordi','1111-1111-1111-1111','01/28','321'); 
INSERT INTO Tarjeta VALUES ( 2, 'Jaume','1112-1112-1112-1112','01/28','321'); 
INSERT INTO Tarjeta VALUES ( 3, 'Jaume Pere','1113-1113-1113-1113','01/28','321'); 
INSERT INTO Tarjeta VALUES ( 4, 'Laia','1114-1114-1114-1114','01/28','321'); 

INSERT INTO MembreTarjeta VALUES ( 1, 1);
INSERT INTO MembreTarjeta VALUES ( 2, 2);
INSERT INTO MembreTarjeta VALUES ( 2, 3);
INSERT INTO MembreTarjeta VALUES ( 3, 4);

INSERT INTO MembreProducte VALUES ( 1, 1, '2024-04-01', '2024-05-01', 1 );
INSERT INTO MembreProducte VALUES ( 1, 3, '2024-04-01', '2024-05-01', 0 );
INSERT INTO MembreProducte VALUES ( 2, 1, '2024-04-02', '2024-05-02', 1 );
INSERT INTO MembreProducte VALUES ( 2, 2, '2024-04-03', '2024-05-03', 1 );
INSERT INTO MembreProducte VALUES ( 2, 3, '2024-04-05', '2024-05-05', 0 );
INSERT INTO MembreProducte VALUES ( 3, 1, '2024-04-04', '2024-05-04', 0 );

-- Consultes 

-- Usuari 
-- Usuari i els seus gustos
-- Usuari i les seves tarjetes
-- Usuari i el seus productes

-- Productes
-- Productes i el seus usuaris

-- Tarjetes
-- Tarjetes i els seus usuaris



