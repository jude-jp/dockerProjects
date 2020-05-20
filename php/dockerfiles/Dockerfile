FROM php:apache

RUN sed -i '1s/^/ServerName localhost\n/' /etc/apache2/apache2.conf

RUN apt-get update; apt-get install vim;

COPY . /var/www/html/

EXPOSE 81