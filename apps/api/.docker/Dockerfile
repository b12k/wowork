FROM php:8-fpm-alpine as base
WORKDIR /var/www

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions \
    && sync \
    && install-php-extensions mbstring pdo_mysql zip exif pcntl gd memcached

RUN apt-get update \
    && apt-get install -y \
      build-essential \
      libpng-dev \
      libjpeg62-turbo-dev \
      libfreetype6-dev \
      locales \
      zip \
      jpegoptim optipng pngquant gifsicle \
      unzip \
      git \
      curl \
      lua-zlib-dev \
      libmemcached-dev \
      nginx \
      supervisor \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www
RUN mkdir /var/log/php
RUN touch /var/log/php/errors.log && chmod 777 /var/log/php/errors.log

COPY .docker/supervisor.conf /etc/supervisord.conf
COPY .docker/php.ini /usr/local/etc/php/conf.d/app.ini
COPY .docker/nginx.conf /etc/nginx/sites-enabled/default
COPY .docker/start.sh /var/www/start.sh
RUN chmod +x /var/www/docker/run.sh

COPY --chown=www:www-data . /var/www
RUN composer install --optimize-autoloader --no-dev
RUN chmod -R ug+w /var/www/storage

EXPOSE 80
ENTRYPOINT ["/var/www/docker/run.sh"]
