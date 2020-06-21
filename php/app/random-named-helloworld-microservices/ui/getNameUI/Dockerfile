FROM php:apache

COPY . /var/www/html/

RUN sed -i '1s/^/ServerName localhost\n/' /etc/apache2/apache2.conf

EXPOSE 80