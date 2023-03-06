# FROM php:8.0.0alpha1-alpine3.12
FROM php:8.0.2-fpm-alpine

# Install required packages
RUN apk update && \
apk add --no-cache \
# RUN apt-get update && apt-get install -y \
        shadow \
        curl \
        libmcrypt-dev \
        libxml2-dev \
        libzip-dev \
        git \
        unzip \
        zip \
        libpng-dev \
        libjpeg-turbo-dev \
        freetype-dev \
        oniguruma-dev \
        openssl-dev

# Install required PHP extensions
RUN docker-php-ext-install \
        bcmath \
        gd \
        mbstring \
        pdo_mysql \
        xml \
        zip

COPY ./compose/laravel/local.ini /usr/local/etc/php/conf.d/local.ini

USER root

ARG PUID=1000
ENV PUID ${PUID}

ARG PGID=1000
ENV PGID ${PGID}

RUN groupmod -o -g ${PGID} www-data && \
    usermod -o -u ${PUID}  -g www-data www-data

# RUN addgroup -g ${PGID} www-data && \
#     adduser -u ${PUID}  -g www-data www-data

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy application files to container
# COPY . .

# Install application dependencies
# RUN composer install

# Expose port 80
# EXPOSE 80

# Start Laravel application
# CMD php artisan serve --host=0.0.0.0 --port=80
