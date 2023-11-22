FROM php:8.2-fpm

ARG WORKDIR
WORKDIR ${WORKDIR}

RUN apt-get -y update && apt-get -y install git unzip vim rsync

RUN docker-php-ext-install pdo pdo_mysql

RUN pecl install xdebug && docker-php-ext-enable xdebug;

COPY .. /var/www/html/

ENV TERM xterm-256color

RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

CMD php-fpm
EXPOSE 80:80