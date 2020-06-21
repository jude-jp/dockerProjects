FROM judejp/apache-php-pdo

ENV DB_NAME helloworld
ENV DB_USERNAME root
ENV DB_PASSWORD root

COPY . /var/www/html/

RUN sed -i '1s/^/ServerName localhost\n/' /etc/apache2/apache2.conf \ 
&& a2enmod rewrite

EXPOSE 80