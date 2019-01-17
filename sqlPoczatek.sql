CREATE TABLE login (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(50) NOT NULL ,
haslo varchar(50) not null,
email varchar(50) not null
);

insert into login (id,login,haslo,email) VALUES ('0','aa','aa','aa@op.pl');
insert into login (id,login,haslo,email) VALUES ('1','bb','cc','bbcc@op.pl');