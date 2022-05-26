CREATE DATABASE dbeventi2015;
USE dbeventi2015;


CREATE TABLE Artista(
    ID_Artista INT NOT NULL AUTO_INCREMENT,
    Nome VARCHAR(50) NOT NULL,
    PRIMARY KEY (ID_Artista)
);

CREATE TABLE Utente(
		ID_Utente INT AUTO_INCREMENT NOT NULL,
		nickname VARCHAR(32) NOT NULL,
		nome VARCHAR(30) NOT NULL,
		cognome VARCHAR(30) NOT NULL,
		email VARCHAR(128) NOT NULL,
		PRIMARY KEY(ID_Utente)
);

CREATE TABLE Categoria(
		ID_Categoria INT AUTO_INCREMENT NOT NULL,
		nome VARCHAR(20) NOT NULL,
		PRIMARY KEY(ID_Categoria)
);

CREATE TABLE Interessi_Utente(
		ID_Interesse INT AUTO_INCREMENT NOT NULL,
		ID_Categoria INT NOT NULL,
		ID_Utente INT NOT NULL,
		PRIMARY KEY(ID_Interesse),
		FOREIGN KEY (ID_Categoria) REFERENCES Categoria(ID_Categoria),
		FOREIGN KEY (ID_Utente) REFERENCES Utente(ID_Utente)
);

CREATE TABLE Evento(
        ID_Evento INT AUTO_INCREMENT NOT NULL,
        Luogo VARCHAR(50) NOT NULL,
        Dataevento DATE NOT NULL,
        Titolo VARCHAR(50) NOT NULL,
        ID_Categoria INT,
        ID_Utente INT,
        PRIMARY KEY(ID_Evento),
        FOREIGN KEY (ID_Categoria) REFERENCES Categoria(ID_Categoria),
        FOREIGN KEY (ID_Utente) REFERENCES Utente(ID_Utente)
);

CREATE TABLE Partecipazione(
        ID_Partecipazione INT AUTO_INCREMENT NOT NULL,
        ID_Evento INT NOT NULL,
        ID_Artista INT NOT NULL,
        PRIMARY KEY(ID_Partecipazione),
        FOREIGN KEY (ID_Evento) REFERENCES Evento(ID_Evento),
        FOREIGN KEY (ID_Artista) REFERENCES Artista(ID_Artista)
);

CREATE TABLE Post(
        ID_Post INT AUTO_INCREMENT NOT NULL,
        Testo VARCHAR(500) NOT NULL,
        Voto TINYINT NOT NULL,
        ID_Utente INT NOT NULL,
        ID_Evento INT NOT NULL,
        PRIMARY KEY(ID_Post),
        FOREIGN KEY (ID_Utente) REFERENCES Utente(ID_Utente),
        FOREIGN KEY (ID_Evento) REFERENCES Evento(ID_Evento)
);


-- Inserimento di dati di test nella tabella artista
INSERT INTO Artista(Nome) VALUES ('Metallica');
INSERT INTO Artista(Nome) VALUES ('Iron Maiden');
INSERT INTO Artista(Nome) VALUES ('AC/DC');
INSERT INTO Artista(Nome) VALUES ('Pink Floyd');
INSERT INTO Artista(Nome) VALUES ('Led Zeppelin');
-- Inserimento di dati di test nella tabella categoria
INSERT INTO Categoria(Nome) VALUES ('Rock');
INSERT INTO Categoria(Nome) VALUES ('Pop');
INSERT INTO Categoria(Nome) VALUES ('Metal');
INSERT INTO Categoria(Nome) VALUES ('Jazz');
INSERT INTO Categoria(Nome) VALUES ('Blues');
INSERT INTO Categoria(Nome) VALUES ('Reggae');
-- Inserimento di dati di test nella tabella evento
INSERT INTO Evento(Luogo, Dataevento, Titolo, ID_Categoria) VALUES ('Roma', '2015-12-31', 'Metallica', 1);
INSERT INTO Evento(Luogo, Dataevento, Titolo, ID_Categoria) VALUES ('Roma', '2015-12-31', 'Iron Maiden', 2);
INSERT INTO Evento(Luogo, Dataevento, Titolo, ID_Categoria) VALUES ('Roma', '2015-12-31', 'AC/DC', 3);
INSERT INTO Evento(Luogo, Dataevento, Titolo, ID_Categoria) VALUES ('Roma', '2015-12-31', 'Pink Floyd', 4);
INSERT INTO Evento(Luogo, Dataevento, Titolo, ID_Categoria) VALUES ('Roma', '2015-12-31', 'Led Zeppelin', 5);
-- Inserimento di dati di test nella tabella utente
INSERT INTO Utente(nickname, nome, cognome, email) VALUES ('admin', 'admin', 'admin', 'admin@admin.com');
INSERT INTO Utente(nickname, nome, cognome, email) VALUES ('user', 'user', 'user', 'user@user.com');
-- Inserimento di dati di test nella tabella interessi_utente
INSERT INTO Interessi_Utente(ID_Categoria, ID_Utente) VALUES (1, 1);
INSERT INTO Interessi_Utente(ID_Categoria, ID_Utente) VALUES (2, 1);
INSERT INTO Interessi_Utente(ID_Categoria, ID_Utente) VALUES (3, 1);
INSERT INTO Interessi_Utente(ID_Categoria, ID_Utente) VALUES (4, 1);
INSERT INTO Interessi_Utente(ID_Categoria, ID_Utente) VALUES (1, 2);
INSERT INTO Interessi_Utente(ID_Categoria, ID_Utente) VALUES (3, 2);
INSERT INTO Interessi_Utente(ID_Categoria, ID_Utente) VALUES (4, 2);
-- Inserimento di dati di test nella tabella partecipazione
INSERT INTO Partecipazione(ID_Evento, ID_Artista) VALUES (1, 1);
INSERT INTO Partecipazione(ID_Evento, ID_Artista) VALUES (1, 2);
INSERT INTO Partecipazione(ID_Evento, ID_Artista) VALUES (1, 3);
INSERT INTO Partecipazione(ID_Evento, ID_Artista) VALUES (2, 3);
INSERT INTO Partecipazione(ID_Evento, ID_Artista) VALUES (2, 4);
INSERT INTO Partecipazione(ID_Evento, ID_Artista) VALUES (3, 4);
INSERT INTO Partecipazione(ID_Evento, ID_Artista) VALUES (4, 5);
INSERT INTO Partecipazione(ID_Evento, ID_Artista) VALUES (5, 2);
INSERT INTO Partecipazione(ID_Evento, ID_Artista) VALUES (5, 3);
-- Inserimento di dati di test nella tabella post
INSERT INTO Post(Testo, Voto, ID_Utente, ID_Evento) VALUES ('Questo è un post di prova', 5, 1, 1);
INSERT INTO Post(Testo, Voto, ID_Utente, ID_Evento) VALUES ('Questo è un post di prova', 2, 1, 2);
INSERT INTO Post(Testo, Voto, ID_Utente, ID_Evento) VALUES ('Questo è un post di prova', 1, 1, 3);
INSERT INTO Post(Testo, Voto, ID_Utente, ID_Evento) VALUES ('Questo è un post di prova', 4, 1, 4);
INSERT INTO Post(Testo, Voto, ID_Utente, ID_Evento) VALUES ('Questo è un post di prova', 3, 1, 5);
INSERT INTO Post(Testo, Voto, ID_Utente, ID_Evento) VALUES ('Questo è un post di prova', 4, 2, 1);
INSERT INTO Post(Testo, Voto, ID_Utente, ID_Evento) VALUES ('Questo è un post di prova', 2, 2, 2);
INSERT INTO Post(Testo, Voto, ID_Utente, ID_Evento) VALUES ('Questo è un post di prova', 3, 2, 3);
INSERT INTO Post(Testo, Voto, ID_Utente, ID_Evento) VALUES ('Questo è un post di prova', 5, 2, 4);
INSERT INTO Post(Testo, Voto, ID_Utente, ID_Evento) VALUES ('Questo è un post di prova', 1, 2, 5);