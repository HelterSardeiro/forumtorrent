create DATABASE forum;
DROP DATABASE forum;
use forum;
drop table users; 
CREATE TABLE users (
id integer auto_increment primary key,
name VARCHAR(60) NOT NULL,
password VARCHAR(255) NOT NULL,
email VARCHAR(200) NOT NULL unique,
created_at timestamp,
updated_at timestamp,
remember_token varchar(255)
);
#drop table usuario;useruseruser
select * from users;
CREATE TABLE admins (
id integer auto_increment primary key,
name VARCHAR(60) NOT NULL,
password VARCHAR(255) NOT NULL,
email VARCHAR(200) NOT NULL unique,
created_at timestamp,
updated_at timestamp,
remember_token varchar(255)
);
create table password_resets (
	id integer auto_increment primary key,
	email varchar(20),
    token varchar(255),
    created_at timestamp
);
drop table conteudo;
-- -----------------------------------------------------
-- Table `mydb`.`conteudo`
-- -----------------------------------------------------
CREATE TABLE conteudo (
  id INT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  descricao TEXT NOT NULL,
  link TEXT NOT NULL,
  user integer,
  admin integer,
  created_at timestamp,
updated_at timestamp,
  PRIMARY KEY (id),
    FOREIGN KEY (user)
    REFERENCES users (id),
    FOREIGN KEY (admin)
    REFERENCES admins (id));

insert into conteudo(nome,descricao,link,user,admin) value ('marvel','Ei teste de seguranca','http://www.marvel2.com','3', '1');
select * from conteudo;
insert into users (name,email,password) value ('Helter2','sardeiro46@gmail.com','123456784');
select * from users where email = 'sardeiro46@gmail.com';
insert into admins (name,email,password) value ('Helter','sardeiro47@gmail.com','12345678');
CREATE TABLE comentario (
  id INT NULL AUTO_INCREMENT ,
  texto TEXT NOT NULL ,
  conteudo_id INT NOT NULL,
  PRIMARY KEY (id),
  created_at timestamp,
updated_at timestamp,
    FOREIGN KEY (conteudo_id)
    REFERENCES conteudo (id));
    alter table conteudo add created_at varchar(20);
    use forum;
   # select u.nome, ct.nome, c.texto from usuario as u inner join conteudo as ct 
   # on u.idusuario = ct.idconteudo inner join comentario as c on ct.idconteudo = c.idcomentario;
    select * from comentario;
