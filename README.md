### Install with Docker

Atualizar vendor packages

    docker compose run --rm php composer update --prefer-dist
    
Intalação das dependencias pelo composer

    docker compose run --rm php composer install    
    
Start the container

    docker compose up -d

Dar permissão de alteração para pasta aassetsss

    sudo chmod 777 web/assets

Entrar no container 

    docker compose exec app bash

Rodar migrates

    yii migrate
    
Pode acessar o sistema pelo 

    http://127.0.0.1:8000 ou http://localhost:8000

Acessar usando o navbar a opçao de Todos (to_do_list)

A única opções de usuário são admin (acesso total) e demo (acesso limitado)
Obs: a senha é o mesmo nome do usuário


