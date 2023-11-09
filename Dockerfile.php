FROM php:7.4-apache

WORKDIR /var/www/html

COPY . .

RUN composer install

EXPOSE 80

CMD ["apache2-foreground"]
