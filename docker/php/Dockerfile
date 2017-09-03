FROM php:7.1-fpm

RUN apt-get update && apt-get -y install libicu-dev && docker-php-ext-install intl

VOLUME /var/www/vote/