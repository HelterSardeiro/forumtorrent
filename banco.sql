create DATABASE forum;
DROP DATABASE forum;
use forum;
drop table users; 
CREATE TABLE users (
id integer auto_increment primary key,
name VARCHAR(60) NOT NULL,
password VARCHAR(255) NOT NULL,
email VARCHAR(20) NOT NULL,
remenber_token varchar(20),
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
email VARCHAR(20) NOT NULL,
remenber_token varchar(20),
created_at timestamp,
updated_at timestamp,
remember_token varchar(255)
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
  PRIMARY KEY (id),
    FOREIGN KEY (user)
    REFERENCES users (id),
    FOREIGN KEY (admin)
    REFERENCES admins (id),
    created_at timestamp,
	updated_at timestamp
    );

insert into conteudo(nome,descricao,link,usuario_idusuario,admin_idadmin)
value ('marvel','filmes bla bla','http://www.marvel.com','sardeiro47@gmail.com', 'sardeiro47@gmail.com');
select * from users;
insert into usuario (nome,email,senha) value ('Helter','sardeiro47@gmail.com','12345678');
insert into admins (name,email,password) value ('Helter','sardeiro47@gmail.com','12345678');
CREATE TABLE comentario (
  id INT NULL AUTO_INCREMENT ,
  texto TEXT NOT NULL ,
  conteudo_id INT NOT NULL,
  PRIMARY KEY (id),
    FOREIGN KEY (conteudo_id)
    REFERENCES conteudo (id),
    created_at timestamp,
	updated_at timestamp
    );
    alter table conteudo add created_at varchar(20);
    use forum;
   # select u.nome, ct.nome, c.texto from usuario as u inner join conteudo as ct 
   # on u.idusuario = ct.idconteudo inner join comentario as c on ct.idconteudo = c.idcomentario;
    
