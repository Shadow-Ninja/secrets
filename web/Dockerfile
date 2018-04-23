FROM php:7.0-apache

# Setting up server
RUN apt-get update
RUN apt-get install -y zlib1g-dev libicu-dev g++ libpq-dev libssl-dev gettext && \
    docker-php-ext-configure intl && \
    docker-php-ext-install intl
RUN docker-php-ext-install gettext
RUN docker-php-ext-install pdo_pgsql
RUN a2enmod rewrite

COPY . /var/www/html/