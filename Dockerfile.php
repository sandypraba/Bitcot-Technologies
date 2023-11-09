# syntax=docker/dockerfile:1
FROM php:7.4-apache

# Install PDO MySQL extension
RUN docker-php-ext-install pdo_mysql
 
COPY . /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
