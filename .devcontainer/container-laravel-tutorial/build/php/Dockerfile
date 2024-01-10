ARG VERSION=8.2-fpm
ARG NODE_VERSION=setup_20

FROM php:${VERSION}

# 環境の更新と必要なモジュールをインストール
RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim \
libfreetype-dev libjpeg62-turbo-dev libpng-dev \
libpq-dev \
zlib1g-dev \
libzip-dev \
libmagickwand-dev

RUN pecl install xdebug imagick
RUN docker-php-ext-enable xdebug imagick

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install pdo_mysql mysqli zip exif gd

# Composerをインストール
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# Node.jsをインストール
RUN curl -fsSL "https://deb.nodesource.com/setup_20.x" | bash -
RUN apt-get install -y nodejs
RUN npm install -g npm@latest

WORKDIR /var/workspace