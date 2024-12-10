#!/usr/bin/env bash

echo $DB_HOST:$DB_PORT;

cd /var/www/html;


CONTAINER_ALREADY_STARTED="CONTAINER_ALREADY_RAN_ONCE"

dockerize -wait tcp://$DB_HOST:$DB_PORT -timeout 4000s

if [ ! -e $CONTAINER_ALREADY_STARTED ]; then
    touch $CONTAINER_ALREADY_STARTED
    sudo apt install php7.4 php7.4-fpm php7.4-mysql php7.4-curl php7.4-gd php7.4-mbstring php7.4-xml php7.4-zip php7.4-soap php7.4-intl unzip curl -y

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


    chmod a+rw -R /var/www/;

    touch /var/log/wp-errors.log;
    touch /var/log/nginx/access.log;
    touch /var/log/nginx/error.log;
    touch /var/log/php7.4-fpm;


else
    echo "-- Container already run. No need to be reconfigured"
fi

echo "-- Running services";

nginx -t;

service nginx start && service php7.4-fpm start && tail -f /var/log/nginx/access.log /var/log/nginx/error.log /var/log/wp-errors.log /var/log/php7.4-fpm.log