# Projeto Be Academy Poo com MariaDB 🚀

## Tecnologias
- Docker
- php:8.1
- Mariadb:10.6
- clickhouse
- nginx
- Dompdf

## Estrutura de pastas

- /config --> Arquivo com as rotas
- /db --> Modelo do banco de dados
- /modulo03 --> conteúdo de aulas
- /phpdocker --> arquivos para rodar o docker-composer
- /public --> index.php
- /src --> arquivos do projeto

## Rodando os exercícios localmente

Para rodar o Projeto em um ambiente dockerizado, utilize o comando:

```bash
docker-compose up -d 
```
** Não se esqueça de entrar no container do php e executar o composer dump-autoload **

Após a execução do comando, o projeto será executado em um ambiente dockerizado.
Para Acessar entre no endereço: <http://localhost:8000>

