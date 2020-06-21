FROM php:apache

RUN sed -i '1s/^/ServerName localhost\n/' /etc/apache2/apache2.conf \ 
&& docker-php-ext-install pdo_mysql

EXPOSE 80