FROM php:7.1-apache

RUN apt-get update \
 && apt-get install -y\
 less nano vim multitail screen htop curl git

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

RUN a2enmod rewrite

# Overwrite files
ADD ./rootfs /


