FROM php:8.1-fpm

## Update package information
RUN apt-get update

## Install Composer
RUN curl -sS https://getcomposer.org/installer \
  | php -- --install-dir=/usr/local/bin --filename=composer

###
## PHP Extensisons
###

## Install intl library and extension
RUN apt-get install -y libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

RUN apt-get install -y \
        libzip-dev \
        unzip \
        zip \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

###
## Optional PHP extensions
###

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=coverage" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini


COPY . /usr/src/speedy
WORKDIR /usr/src/speedy
