CREATE DATABASE forum;
use forum;
CREATE TABLE usuario (
  nome VARCHAR(60) NOT NULL,
  senha VARCHAR(30) NOT NULL,
  email VARCHAR(20) NOT NULL,
  PRIMARY KEY (email));


CREATE TABLE admin (
  nome VARCHAR(60) NOT NULL,
  senha VARCHAR(20) NOT NULL,
  email VARCHAR(30) NOT NULL,
  PRIMARY KEY (email));

drop table conteudo;
-- -----------------------------------------------------
-- Table `mydb`.`conteudo`
-- -----------------------------------------------------
CREATE TABLE conteudo (
  id INT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  descricao TEXT NOT NULL,
  link TEXT NOT NULL,
  usuario_idusuario varchar(30) NOT NULL,
  admin_idadmin varchar(30) NOT NULL,
  PRIMARY KEY (id),
    FOREIGN KEY (usuario_idusuario)
    REFERENCES usuario (email),
    FOREIGN KEY (admin_idadmin)
    REFERENCES admin (email));
select * from conteudo;

insert into conteudo(nome,descricao,link,usuario_idusuario,admin_idadmin)
value ('marvel','filmes bla bla','http://www.marvel.com','sardeiro47@gmail.com', 'sardeiro47@gmail.com');

insert into usuario (nome,email,senha) value ('Helter','sardeiro47@gmail.com','12345678');
insert into admin (nome,email,senha) value ('Helter','sardeiro47@gmail.com','12345678');
CREATE TABLE comentario (
  id INT NULL AUTO_INCREMENT ,
  texto TEXT NOT NULL ,
  conteudo_id INT NOT NULL,
  PRIMARY KEY (id),
    FOREIGN KEY (conteudo_id)
    REFERENCES conteudo (id));
    alter table conteudo add created_at varchar(20);
    use forum;
   # select u.nome, ct.nome, c.texto from usuario as u inner join conteudo as ct 
   # on u.idusuario = ct.idconteudo inner join comentario as c on ct.idconteudo = c.idcomentario;
    
