# Prova PHP IST-SD


**Candidato:** Felipe Morais

Realizado desafio utilizando framework Laravel;

O login com redes sociais não foi implementado;

# Instruções para execução da aplicação


**PASSO 1 - INCIANDO CONTAINERS**

A aplicação utiliza os containers disponibilizados no desafio. 

Para começar execute o comando abaixo a partir da raiz do projeto.

```
docker-compose up -d

```

Será iniciado o container do PHP, Ngnix e Mysql

**PASSO 2 - EXECUTAR AS MIGRAÇÔES E SEEDS**

Acesse a pasta `app` que é a pasta onde contém o projeto desenvolvido e em 
seguida acesse o container PHP, utilizando o comando abaixo:

```
docker exec -it nome_do_container bash
```

após acessar o container execute as migrações atraves do comando abaixo:

*Obs: o banco utilizado é o `ist`*

```
php artisan migrate
```

foi disponibilizados dados para popular o banco e poder efetuar os testes.
Você pode popular esses dados executando os Seeds atraves do comando abaixo:

```
php artisan db:seed
```

**PASSO 3 - ACESSANDO A APLICAÇÂO**

Após executar os passos acima a aplicação já pode ser acessada pelo `localhost:80`

Caso não queira se cadastras pode utilizar o login abaixo;

```
Email: flpiandrade@gmail.com
Senha 123456
```

Abaixo os dados para testar a conexão com o banco de dados:
- host: localhost
- port: 3306
- database: ist
- user: root
- password: 123.456

