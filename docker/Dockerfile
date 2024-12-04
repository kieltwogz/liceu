ARG IMAGE_VERSION=4.0.0
FROM okngroup/nginx-sites-web-server:${IMAGE_VERSION}

COPY nginx /etc/nginx

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && chmod +x wp-cli.phar  && mv wp-cli.phar /usr/local/bin/wp && wp --info

RUN apt-get update && apt-get upgrade -y && apt-get install -y mysql-client

#RUN curl -sL https://deb.nodesource.com/setup_current.x | bash -
#RUN  apt-get install -y nodejs

COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]