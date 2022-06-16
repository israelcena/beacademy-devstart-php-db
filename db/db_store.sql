CREATE DATABASE db_store;
USE db_store;
CREATE TABLE tb_category (
  id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL,
  description VARCHAR(100) NOT NULL
);
INSERT INTO tb_category (name, description)
VALUES(
    'informática',
    'Produtos de informática e acessórios'
  ),
  (
    'celulares',
    'aparecelhos telefonicos de ultima gereção'
  ),
  (
    'acessorios',
    'acessorios de tecnologia e acessorios em geral'
  );