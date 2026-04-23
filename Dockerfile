ARG PHP_VERSION=8.5
ARG COMPOSER_VERSION=2.7

FROM composer:${COMPOSER_VERSION} AS composer_bin
FROM php:${PHP_VERSION}-cli

RUN apt-get update && \
    apt-get install -y autoconf pkg-config libssl-dev git libzip-dev zlib1g-dev unzip libcurl4-openssl-dev && \
    pecl install mongodb && docker-php-ext-enable mongodb && \
    pecl install xdebug && docker-php-ext-enable xdebug && \
    docker-php-ext-install -j$(nproc) zip

COPY --from=composer_bin /usr/bin/composer /usr/local/bin/composer

WORKDIR /code
