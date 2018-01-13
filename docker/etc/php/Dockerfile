ARG PHP_VERSION
FROM php:$PHP_VERSION
RUN apt-get update && apt-get install -y \
        curl \
        wget

RUN docker-php-ext-install pdo_mysql
