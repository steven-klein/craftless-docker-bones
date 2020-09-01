FROM php:7.3-fpm-alpine3.12

RUN set -ex \
    && apk add --update --no-cache \
    freetype \
    libpng \
    libjpeg-turbo \
    freetype-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    libxml2-dev \
    libzip-dev \
    autoconf \
    g++ \
    imagemagick \
    imagemagick-dev \
    libtool \
    make \
    pcre-dev \
    libintl \
    icu \
    icu-dev \
    bash \
    jq \
    git \
    findutils \
    gzip \
    && docker-php-ext-configure gd \
    --with-freetype-dir=/usr/include/ \
    --with-png-dir=/usr/include/ \
    --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install bcmath mbstring iconv gd soap zip intl mysqli pdo_mysql \
    && pecl install imagick redis \
    && docker-php-ext-enable imagick redis \
    && rm -rf /tmp/pear \
    && apk del freetype-dev libpng-dev libjpeg-turbo-dev autoconf g++ libtool make pcre-dev

RUN apk add gnu-libiconv --update-cache --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ --allow-untrusted
ENV LD_PRELOAD /usr/lib/preloadable_libiconv.so php

COPY ./php.ini /usr/local/etc/php/

WORKDIR /var/www/html
RUN chown -R www-data:www-data .
USER www-data

CMD [ "docker-php-entrypoint", "php-fpm"]
