FROM php:8.1.0-fpm-alpine
WORKDIR /var/www/html/
RUN docker-php-ext-install pdo pdo_mysql
RUN apk add --no-cache zip libzip-dev libpng-dev
RUN docker-php-ext-install zip
RUN docker-php-ext-install gd