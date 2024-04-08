
## Crear una base de dades amb contingut

Los comandos SQL más importantes

    SELECT - extrae datos de una base de datos
    UPDATE - actualiza los datos en una base de datos
    DELETE - borra datos de una base de datos
    INSERT INTO - inserta nuevos datos en una base de datos
    CREATE DATABASE - crea una nueva base de datos
    ALTER DATABASE - modifica una base de datos
    CREATE TABLE - crea una nueva tabla
    ALTER TABLE - modifica una tabla
    DROP TABLE - borra una tabla
    CREATE INDEX - crea un índice (clave de búsqueda)
    DROP INDEX - borra un índice
    JOIN
    RIGHT JOIN
    LEFT JOIN

CONSULTAS

mysql> SELECT * FROM mi_tabla WHERE nombre = "Lupita AND edad < 30;

## Crear bases de dades

Podem crear una base de dades desde terminal pot ser-nos de molta
utilitat i estalviar-nos feina.

```
> mariadb --user='root' --password='' cineclub < 'cineclub.sql'
```

D'altra banda si no tenim el fitxer sql, 
Crear una nova base de dades és fàcil. Només cal emprar un parell
de comandes i ja tenim creada i seleccionada una base de dades. 
Cal tenir en compte com és obvi, que ara per ara està buida 
i no conté cap taula.

```
MariaDB [cineclub]> CREATE DATABASE db_nova;
Query OK, 1 row affected (0,000 sec)

MariaDB [cineclub]> USE db_nova;
Database changed
MariaDB [db_nova]> 
```

## Listar bases de dades

```
MariaDB [(none)]> SHOW DATABASES;
+--------------------+
| Database           |
+--------------------+
| clubplatea         |
| information_schema |
| mysql              |
| performance_schema |
| sys                |
| test               |
+--------------------+
6 rows in set (0,001 sec)

MariaDB [(none)]> 
```

## Selecionar base de dades

```
MariaDB [(none)]> USE clubplatea;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
MariaDB [clubplatea]>
```

## Eliminar un base de dades

## Crear una taula

```
CREATE TABLE mascotas(
    -> nombre VARCHAR(20),
    -> propietario VARCHAR(20),
    -> nacimiento DATE,
    -> especie VARCHAR(20),
    -> sexo CHAR(1) );
Query OK, 0 rows affected
```

## Llistar taules

```
MariaDB [clubplatea]> SHOW TABLES;
+----------------------+
| Tables_in_clubplatea |
+----------------------+
| mascotas             |
+----------------------+
1 row in set (0,000 sec)

MariaDB [clubplatea]>
```

## Modificar 

## Veure estructura de la taula 

```
MariaDB [clubplatea]> DESCRIBE mascotas;
+-------------+-------------+------+-----+---------+-------+
| Field       | Type        | Null | Key | Default | Extra |
+-------------+-------------+------+-----+---------+-------+
| nombre      | varchar(20) | YES  |     | NULL    |       |
| propietario | varchar(20) | YES  |     | NULL    |       |
| nacimiento  | date        | YES  |     | NULL    |       |
| especie     | varchar(20) | YES  |     | NULL    |       |
| sexo        | char(1)     | YES  |     | NULL    |       |
+-------------+-------------+------+-----+---------+-------+
5 rows in set (0,001 sec)

MariaDB [clubplatea]>
```

## Omplir de dades una taula 

```
MariaDB []> INSERT INTO members VALUES( "2","122","adss","a
sd@ad","adsad","4134");
```

## Eliminar una taula 


```
MariaDB [clubplatea]> DROP TABLE mascotas;
Query OK, 0 rows affected (0,024 sec)

MariaDB [clubplatea]>
```

## Veure el contingut de la taula

Calle bruc 23, Parets del Valles.

```
MariaDB [clubplatea]> SELECT * FROM members;
+-----------+------------+---------+--------+---------+-----------+
| id_member | nacimiento | surname | email  | address | telephone |
+-----------+------------+---------+--------+---------+-----------+
| 2         | 122        | adss    | asd@ad | adsad   | 4134      |
| 1         | 133        | adss    | asd@ad | adhhd   | 4sf       |
| 1         | 133        | adss    | asd@ad | adhhd   | 4sf       |
+-----------+------------+---------+--------+---------+-----------+
3 rows in set (0,009 sec)

MariaDB [clubplatea]> SELECT id_member, surname, address  FROM members;
+-----------+---------+---------+
| id_member | surname | address |
+-----------+---------+---------+
| 2         | adss    | adsad   |
| 1         | adss    | adhhd   |
| 1         | adss    | adhhd   |
+-----------+---------+---------+
3 rows in set (0,000 sec)

MariaDB [clubplatea]>
```

SELECT * FROM employees AS E LEFT JOIN branches AS B ON E.branchid = B.id WHERE E.branchid IS NULL 

## Modicar contingut d'una taula 


MariaDB [cineclub]> UPDATE MembreProducte SET expira='2024-06-1' WHERE alta='2024-04-04';


## Us de JOIN

Permet unir dues llistes per un concepte per exemple. 

MariaDB [cineclub]> SELECT * FROM Membre;
+----------+------+------------------+------------+-----------------+-----------------------------+-----------+
| idMembre | pass | nom              | cognom     | email           | adreca                      | telefon   |
+----------+------+------------------+------------+-----------------+-----------------------------+-----------+
|        1 | 1234 | Jordi Pere Arnau | Dels munts | jpa@gmail.com   | Pujada del tranvia, Manacor | 900609060 |
|        2 | 1234 | Jaume            | Lopez      | jaume@gmail.com | Av Barcelona, Sort          | 900609061 |
|        3 | 1234 | Laia             | Sánchez    | laia@gmail.com  | Diagonal 12, Gavà           | 900609061 |
+----------+------+------------------+------------+-----------------+-----------------------------+-----------+
3 rows in set (0,000 sec)

MariaDB [cineclub]> SELECT * FROM MembreGustos;
+----------+-----------+----------+-------------+-------------+
| idMembre | mail_info | mail_new | cookie_perm | cookie_func |
+----------+-----------+----------+-------------+-------------+
|        1 |         1 |        1 |           1 |           1 |
|        2 |         1 |        1 |           1 |           1 |
|        3 |         1 |        1 |           1 |           1 |
+----------+-----------+----------+-------------+-------------+
3 rows in set (0,000 sec)

MariaDB [cineclub]> SELECT nom,cognom,email,MembreGustos.* FROM Membre JOIN MembreGustos ON MembreGustos.idMembre = Membre.idMembre;
+------------------+------------+-----------------+----------+-----------+----------+-------------+-------------+
| nom              | cognom     | email           | idMembre | mail_info | mail_new | cookie_perm | cookie_func |
+------------------+------------+-----------------+----------+-----------+----------+-------------+-------------+
| Jordi Pere Arnau | Dels munts | jpa@gmail.com   |        1 |         1 |        1 |           1 |           1 |
| Jaume            | Lopez      | jaume@gmail.com |        2 |         1 |        1 |           1 |           1 |
| Laia             | Sánchez    | laia@gmail.com  |        3 |         1 |        1 |           1 |           1 |
+------------------+------------+-----------------+----------+-----------+----------+-------------+-------------+
3 rows in set (0,001 sec)

MariaDB [cineclub]> 

Suposem que tenim 3 taules: 

```
MariaDB [cineclub]> SELECT * FROM Productes;
+------------+-----------+-------+-----------------------------+--------+
| idProducte | nom       | preu  | descripcio                  | durada |
+------------+-----------+-------+-----------------------------+--------+
|          1 | Crític    | 25.55 | Veure 30min de película     |     10 |
|          2 | Gandul    |  5.55 | Dret a seure                |      1 |
|          3 | Assedegat | 95.55 | Begudes gratuites 1 sessió  |      1 |
+------------+-----------+-------+-----------------------------+--------+
3 rows in set (0,000 sec)

MariaDB [cineclub]> SELECT * FROM Membre;
+----------+------+------------------+------------+-----------------+-----------------------------+-----------+
| idMembre | pass | nom              | cognom     | email           | adreca                      | telefon   |
+----------+------+------------------+------------+-----------------+-----------------------------+-----------+
|        1 | 1234 | Jordi Pere Arnau | Dels munts | jpa@gmail.com   | Pujada del tranvia, Manacor | 900609060 |
|        2 | 1234 | Jaume            | Lopez      | jaume@gmail.com | Av Barcelona, Sort          | 900609061 |
|        3 | 1234 | Laia             | Sánchez    | laia@gmail.com  | Diagonal 12, Gavà           | 900609061 |
+----------+------+------------------+------------+-----------------+-----------------------------+-----------+
3 rows in set (0,000 sec)

MariaDB [cineclub]> SELECT * FROM MembreProducte;
+----------+------------+------------+------------+---------------+
| idMembre | idProducte | alta       | expira     | autorenovacio |
+----------+------------+------------+------------+---------------+
|        1 |          1 | 2024-04-01 | 2024-05-01 |             1 |
|        1 |          3 | 2024-04-01 | 2024-05-01 |             0 |
|        2 |          1 | 2024-04-02 | 2024-05-02 |             1 |
|        2 |          2 | 2024-04-03 | 2024-05-03 |             1 |
|        2 |          3 | 2024-04-05 | 2024-05-05 |             0 |
|        3 |          1 | 2024-04-04 | 2024-06-01 |             0 |
+----------+------------+------------+------------+---------------+
6 rows in set (0,000 sec)

MariaDB [cineclub]> 



MariaDB [cineclub]> CREATE TABLE temp SELECT idMembre,email FROM Membre JOIN MembreProducte ON Membre.idMembre = MembreProducte.idMembre;
MariaDB [cineclub]>
MariaDB [cineclub]> SELECT idMembre,email,Productes.nom,Productes.descripcio,alta,Productes.durada,autorenovacio FROM tMemProd JOIN Productes ON tMemProd.idProducte = Productes.idProducte;
+----------+-----------------+-----------+-----------------------------+------------+--------+---------------+
| idMembre | email           | nom       | descripcio                  | alta       | durada | autorenovacio |
+----------+-----------------+-----------+-----------------------------+------------+--------+---------------+
|        1 | jpa@gmail.com   | Crític    | Veure 30min de película     | 2024-04-01 |     10 |             1 |
|        1 | jpa@gmail.com   | Assedegat | Begudes gratuites 1 sessió  | 2024-04-01 |      1 |             0 |
|        2 | jaume@gmail.com | Crític    | Veure 30min de película     | 2024-04-02 |     10 |             1 |
|        2 | jaume@gmail.com | Gandul    | Dret a seure                | 2024-04-03 |      1 |             1 |
|        2 | jaume@gmail.com | Assedegat | Begudes gratuites 1 sessió  | 2024-04-05 |      1 |             0 |
|        3 | laia@gmail.com  | Crític    | Veure 30min de película     | 2024-04-04 |     10 |             0 |
+----------+-----------------+-----------+-----------------------------+------------+--------+---------------+
6 rows in set (0,001 sec)

MariaDB [cineclub]> 

## Us de LEFT

Al igual que el operador JOIN, la cláusula LEFT JOIN nos permite enlazar dos tablas, pero el resultado de la consulta incluirá todos los registros del lado izquierdo.


MariaDB [storage]> SELECT E.id, E.dni, E.first_name, E.last_name, E.branch_id, 
                      B.name AS branch FROM employees AS E
                      LEFT JOIN branches AS B ON E.branch_id = B.id;


## fonts

https://www.sql-easy.com/es/mysql/
https://styde.net/uso-de-join-en-consultas-con-mysql-mariadb/
