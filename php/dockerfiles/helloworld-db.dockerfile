FROM php:apache

ENV DB_NAME helloworld
ENV DB_USERNAME root
ENV DB_PASSWORD root

COPY ./helloworld-db/index.php /var/www/html/
COPY ./services/dbHandler.php /var/www/html/services/
RUN docker-php-ext-install pdo_mysql
RUN sed -i '1s/^/ServerName localhost\n/' /etc/apache2/apache2.conf
EXPOSE 80