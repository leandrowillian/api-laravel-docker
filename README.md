## Sobre o projeto

API criada utilizando Laravel 9, Docker e Docker Compose, para controle de clientes e suas respectivas placas de carro, conforme informado no "Exercício Prático".


### Passos a serem executados para criar o ambiente corretamente

- Executar o comando **docker-compose up -d --build** na raiz do projeto.
- Alterar permissões nas seguintes pastas no container Docker da aplicação (executar na raiz do container):
    - RUN chmod 775 -R /var/www/html/storage/*
    - RUN chmod 775 -R /var/www/html/bootstrap/cache
- Acessar container Docker do PHP e realizar os seguintes comandos:
    - php artisan migrate
    - php artisan db:seed --class=ClienteSeeder


### Rotas Criadas

Base URL: **http://localhost:8080/**

| Rota | Método | Descrição | Recebe | Retorna |
| ---- | --- | ------- | ------- | ----- |
| /api/cliente | POST | Cria um cliente | JSON contendo: nome; cpf; placa_carro. | Retorna mensagem de sucesso e os dados inseridos! |
| /api/cliente/{id_cliente} | PUT | Edita o cliente | JSON contendo: nome; cpf; placa_carro. | Retorna mensagem de sucesso e os dados atualizados! |
| /api/cliente/{id_cliente} | DELETE | Deleta o cliente caso exista | | Retorna mensagem de sucesso! |
| /api/cliente/{id_cliente} | GET | Consulta dados de um cliente | | Retorna os dados do cliente e uma mensagem de sucesso! |
| /api/consulta/final-placa/ | GET | Consulta clientes que possuem carro com final de placa informada no parametro | | Retora todos os clientes que possuem uma placa que terminam com o caractere informado! |