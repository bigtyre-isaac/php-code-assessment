FROM composer:1.9.3 as vendor

WORKDIR /tmp/

COPY /src/html/private/composer.json composer.json
COPY /src/html/private/composer.lock composer.lock

RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist


FROM php:7.4-apache
RUN docker-php-ext-install mysqli

COPY . /var/www/html
COPY --from=vendor /tmp/vendor/ /var/www/html/private/vendor/