-- Para criar um banco de dados --
CREATE DATABASE db_escola;
-- selecionar db --
USE db_escola;
-- Criar Tabela
CREATE TABLE tb_professor (
  id INTEGER(11) PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  cpf CHAR(11) UNIQUE NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL
);
CREATE TABLE tb_aluno (
  nome VARCHAR(100) NOT NULL,
  cpf CHAR(11) NOT NULL,
  email VARCHAR(255),
  matricula INTEGER(10)
);
-- inserir dados
INSERT INTO tb_professor (nome, email, cpf)
VALUES (
    'Alessandro',
    'alessandro@email.com',
    '12312312312'
  );
INSERT INTO tb_professor (nome, email, cpf)
VALUES (
    'bruno',
    'bruno@email.com',
    '43212312312'
  );
-- selecionar dados
SELECT *
FROM tb_professor;
-- deletar tabela
DROP TABLE tb_professor;
-- modificar tabela
ALTER TABLE db_escola.tb_aluno
MODIFY COLUMN email varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NOT NULL;