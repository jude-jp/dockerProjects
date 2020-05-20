FROM php:apache

RUN sed -i '1s/^/ServerName localhost\n/' /etc/apache2/apache2.conf

RUN apt-get update && apt-get install -y vim;

COPY ./app/* /var/www/html/

EXPOSE 80