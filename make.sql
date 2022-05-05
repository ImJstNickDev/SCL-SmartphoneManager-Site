CREATE DATABASE DBTelefonini;
USE DBTelefonini;

CREATE TABLE telefoni (
  id int NOT NULL,
  marca varchar(30) NOT NULL,
  modello varchar(30) NOT NULL,
  prezzo float NOT NULL,
  PRIMARY KEY(id)
) ENGINE=InnoDB;