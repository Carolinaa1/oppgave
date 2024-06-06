mariadb.exe -u root -p 
--passord er 'root' på Windows(cmd) og 'Admin' på Ubuntu(terminal) (Ubuntu trenger ikke .exe fordi det er execution file for Windows)


--Viser alle databasene som er i MariaDB
show databases; 


--Lage database i cmd(Windows)/terminal(Ubuntu) med MariaDB
CREATE DATABASE spill;  


--Velger databasen du vil inn på (bytt 'spill' til noe annet hvis det er en annen database)
use spill;


--Lage tabell til databasen
CREATE TABLE data_til_spill 
(
    spill_id INT,
    tittel VARCHAR(50) not null,
    score VARCHAR(50)
);


--Legge til data i tabellen
insert into data_til_spill (tittel, score) values ('resident evil', '204');
insert into data_til_spill (tittel, score) values ('helldivers 2', '280');
insert into data_til_spill (tittel, score) values ('resident evil', '204');


--hvis man vil velge spesifik tabell kan man endre stjerne til navnet til en av dataene i tabellen
select * from data_til_spill; 


