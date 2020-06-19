FROM php:apache

ENV API_GETNAME_NAME getname_api

COPY . /var/www/html/

RUN sed -i '1s/^/ServerName localhost\n/' /etc/apache2/apache2.conf \ 
&& docker-php-ext-install pdo_mysql

EXPOSE 80