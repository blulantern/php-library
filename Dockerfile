FROM php:7.4.5-fpm

RUN docker-php-ext-install pdo pdo_mysql