USE db_escola;
-- inserir 1 registro --
INSERT INTO tb_professor (nome, email, cpf)
VALUES(
    'Chiquim das Tapiocas',
    'chiquim@email.com',
    12312321
  );
-- inserir mais de um registro --
INSERT INTO tb_professor (nome, email, cpf)
VALUES(
    'Zezim das rapaduras',
    'zezim@email.com',
    '123444444'
  ),
  (
    'maria das rapaduras',
    'maria@email.com',
    '123444234'
  ),
  (
    'luiza das rapaduras',
    'luiza@email.com',
    '123444114'
  );
-- deletar 1 registro por id
DELETE FROM tb_professor
WHERE id = '1';
-- deletar 1 registro por email
DELETE FROM tb_professor
WHERE email = 'usuario@email.com';
-- update infos de 1 registro 
-- (pode ser por cpf ou id, se não for colococa o WHERE, modificará todos os elementos da tabela)
UPDATE tb_professor
SET nome = "luiza da caucaia"
WHERE cpf = '123444114';
-- selecinar todos os dadsos de todos os professores
SELECT *
FROM tb_professor;
-- selecinar todos os dados do professor de um id especifico
SELECT *
FROM tb_professor
WHERE id = '5';
-- selecionar alguns dados 
SELECT nome,
  cpf
FROM tb_professor;
-- ignore eslint selecionar alguns dados de quem tem id maior 5
SELECT nome,
  cpf
FROM tb_professor
WHERE id > '5';
-- see table content
DESC tb_professor;