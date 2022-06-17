CREATE DATABASE db_store;
USE db_store;
CREATE TABLE tb_category (
  id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL,
  description VARCHAR(100) NOT NULL
);
CREATE TABLE tb_product (
  id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL,
  description VARCHAR(100) NOT NULL,
  photo VARCHAR(255) NOT NULL,
  value FLOAT(5,2) NOT NULL,
  quantity INTEGER(100)  NOT NULL,
  created_at DATETIME NOT NULL,
  category_id INT(11) NOT NULL
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
INSERT INTO tb_product (name, description, photo, value, quantity, created_at, category_id) 
VALUES ('mouse', 'mouse rgb', 'https://images-americanas.b2w.io/produtos/3057334749/imagens/mouse-c-fio-optico-mo300-multilaser/3057334749_1_large.jpg', 30.50, 10, '2021-12-31 23:59:59', 1), 
('teclado', 'teclado rgb', 'https://images-americanas.b2w.io/produtos/5008508351/imagens/teclado-multimedia-usb-pto-kross/5008508351_1_xlarge.jpg', 20.50, 10, '2021-11-21 03:59:59', 1),
('caixa de som', 'caixa de som rgb', 'https://images-americanas.b2w.io/produtos/4941332293/imagens/caixa-de-som-gamer-p2-usb-stereo-2-0-15w-rms-led-rgb-sp330-multilaser/4941332293_1_large.jpg', 32.50, 2, '2020-12-31 13:59:59', 1);