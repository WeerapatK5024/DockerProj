FROM php:7.4-apache
WORKDIR /var/www/html/
EXPOSE 8081:80
RUN apt-get update -y && apt-get install -y libmariadb-dev
RUN docker-php-ext-install pdo pdo_mysql
