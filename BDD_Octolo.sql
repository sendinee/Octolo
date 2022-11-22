DROP DATABASE IF EXISTS BDD_Octolo
CREATE DATABASE BDD_Octolo;
USE BDD_Octolo;

CREATE TABLE BDD_Octolo (
    id int(11) NOT NULL,
    greeting varchar (20),
    date DATETIME
);

SELECT CURDATE(), CURRENT_DATE(), CURRENT_DATE;
SELECT CURTIME(), CURRENT_TIME(), CURRENT_TIME;
SELECT NOW(), SYSDATE();
SELECT DATE_FORMAT('2022-11-22 10:47:38', 'Le %d%m%Y, à %H:%i:S');

-- Oracle & PostgreSQL
#TO_CHAR(<date>, <format>)

-- SQLite
#strftime(<format>, <date>)

-- SQL Server
#FORMAT((<date>, <format>)
