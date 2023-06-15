FROM php:8.2.4-fpm

## Update package information
RUN apt-get update

## Install Composer
RUN curl -sS https://getcomposer.org/installer \
  | php -- --install-dir=/usr/local/bin --filename=composer

###
## PHP Extensisons
###

## Install intl library and extension
RUN apt-get install -y \
    libicu-dev \
    libxslt-dev \
    libzip-dev \
    curl \
    unzip \
    zip

RUN docker-php-ext-install intl  \
    && docker-php-ext-configure intl

RUN docker-php-ext-install xsl  \
    && docker-php-ext-configure xsl

RUN docker-php-ext-install zip  \
    && docker-php-ext-configure zip

###
## Optional PHP extensions
###

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=coverage" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini


COPY . /usr/src/speedy
WORKDIR /usr/src/speedy
