CREATE DATABASE DBTelefonini;
USE DBTelefonini;

CREATE TABLE telefoni (
  id int NOT NULL AUTO_INCREMENT,
  marca varchar(30) NOT NULL,
  modello varchar(30) NOT NULL,
  prezzo float NOT NULL,
  PRIMARY KEY(id)
) ENGINE=InnoDB;

CREATE TABLE users (
  id int NOT NULL AUTO_INCREMENT,
  username varchar(30) NOT NULL,
  email varchar(128) NOT NULL,
  passwd varchar(64) NOT NULL,
  userlevel int NOT NULL DEFAULT 0,
  attivo boolean NOT NULL DEFAULT 0,
  newsletter boolean NOT NULL DEFAULT 0,
  PRIMARY KEY(id)
) ENGINE=InnoDB;

CREATE TABLE permmanager (
  id int NOT NULL AUTO_INCREMENT,
  userlevel int NOT NULL,
  permission varchar(30) NOT NULL,
  PRIMARY KEY(id)
) ENGINE=InnoDB;

CREATE TABLE sessionmanager (
  id int NOT NULL AUTO_INCREMENT,
  sessionid varchar(128) NOT NULL,
  userid int NOT NULL,
  sessiontype int NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(userid) REFERENCES users(id)
) ENGINE=InnoDB;