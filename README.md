# WP Kick Start

## instrução de instalação/execução do projeto em ambiente de desenvolvimento

Execute o comando abaixo para rodar os containers do projeto.

`docker-compose up;`

Para acessar o container de qualquer pasta:

`docker exec -it wp-ks-app /bin/bash`

Para acessar o container usando docker-compose:

`docker-compose exec web /bin/bash`


Na **raiz do projeto (/var/www/html)** execute:

`composer install;`

No ambiente de desenvolvimento, na raiz do tema 'wp-ks' execute:

`composer install;`