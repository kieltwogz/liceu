#!/usr/bin/env bash

echo $DB_HOST:$DB_PORT;

cd /var/www/html;

echo "-- Running composer install";
find . -name composer.json -not -path '*/wp-includes/*' -not -path '*/vendor/*' | sed -r 's/composer.json//g' |  sed -r 's/\.\///' | xargs -d $'\n' sh -c 'for arg do cd "$arg"; echo "composer em: $arg"; composer install -vvv; cd /var/www/html ; done' _ ;
##find . -name package.json -not -path '*/wp-includes/*' -not -path '*/node_modules/*' | sed -r 's/package.json//g' | xargs -d $'\n' sh -c 'for arg do cd "$arg"; npm install; done' _ ;

CONTAINER_ALREADY_STARTED="CONTAINER_ALREADY_RAN_ONCE"

dockerize -wait tcp://$DB_HOST:$DB_PORT -timeout 4000s

if [ ! -e $CONTAINER_ALREADY_STARTED ]; then
    touch $CONTAINER_ALREADY_STARTED

    echo "-- Container running for its first time"

    openssl req -x509 -nodes -days 365 -subj "/C=BR/ST=SP/O=OKN./CN=localhost" -addext "subjectAltName=DNS:localhost" -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/private/nginx-selfsigned.crt
    sed -i "s|#include snippets/https-server.conf;|include snippets/https-server-self-signed.conf;|g" /etc/nginx/sites-available/app;
    if [ -e /etc/nginx/snippets/proxy_cache.conf ]; then
        echo "file exists";
        printf "\ninclude snippets/proxy_cache.conf;" >> /etc/nginx/sites-available/app;
    fi
    chmod a+rw -R /var/www/;

	  cp wp-config.docker.php wp-config.php;
    if [ "$WEB_PORT" != "80" ]; then
	   sed -i "s/localhost/localhost:${WEB_PORT}/g" wp-config.php
    fi

    find . -name composer.json -not -path '*/wp-includes/*' -not -path '*/vendor/*' | sed -r 's/composer.json//g' | xargs -d $'\n' sh -c 'for arg do cd "$arg"; composer dump-autoload; done' _ ;

    chmod a+rw -R /var/www/;

    touch /var/log/wp-errors.log;
    touch /var/log/nginx/access.log;
    touch /var/log/nginx/error.log;
    touch /var/log/php8.1-fpm;


else
    echo "-- Container already run. No need to be reconfigured"
fi

echo "-- Running services";

nginx -t;

service nginx start && service php8.1-fpm start && tail -f /var/log/nginx/access.log /var/log/nginx/error.log /var/log/wp-errors.log /var/log/php8.1-fpm.log