FROM php:apache

ENV DB_NAME helloworld
ENV DB_USERNAME root
ENV DB_PASSWORD root

COPY ./helloworld-db/ /var/www/html/
COPY ./services/ /var/www/html/services/

RUN sed -i '1s/^/ServerName localhost\n/' /etc/apache2/apache2.conf \ 
&& docker-php-ext-install pdo_mysql

EXPOSE 80