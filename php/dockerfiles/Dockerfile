FROM php:apache

RUN sed -i '1s/^/ServerName localhost\n/' /etc/apache2/apache2.conf

COPY ./index.php /var/www/html/

EXPOSE 80