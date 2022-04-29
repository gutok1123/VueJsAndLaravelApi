## Laravel - Vue - Cadastro De Produtos

### Descrição
   
O projeto tem como objetivo realizar um CRUD de produtos eletrônicos.

### Tecnologias Usadas

- Laravel
- VueJs
- Mysql
- Docker

### Primeiros Passos

Execute no terminal para subir os containers com o banco de dados e backend
```bash
 sudo docker-compose up -d --build
 sudo docker exec -it app bash
 ```
 Dentro do container app que aponta para o backend execute
 ```bash
 composer install 
 php artisan migrate
 php artisan db:seed
 vendor/bin/phpunit
```

Dentro da pasta frontend execute
 ```bash
 npm install
 npm run serve
```
