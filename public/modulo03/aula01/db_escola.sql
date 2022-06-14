-- Para criar um banco de dados --
CREATE DATABASE db_escola;
-- selecionar db --
USE db_escola;
-- Criar Tabela
CREATE TABLE tb_professor (
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