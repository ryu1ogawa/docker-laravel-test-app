FROM php:8.0-fpm-buster
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

ENV COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
  apt-get -y install git unzip libzip-dev libicu-dev libonig-dev && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  docker-php-ext-install intl pdo_mysql zip bcmath && \
  curl -L git.io/nodebrew | perl - setup && \
  export PATH=$HOME/.nodebrew/current/bin:$PATH && \
  source ~/.bashrc && \
  apt update && \
  apt -y install nodejs npm &&\
  npm install && \
  nodebrew install latest && \
  nodebrew use latest

  # apt-get install -y \
  # curl \
  # gnupg && \
  # curl -sL https://deb.nodesource.com/setup_11.x | bash - && \
  # apt-get install -y nodejs && \
  # apt-get update && apt-get install -y git zip unzip && \
  # npm install npm@latest -g && \
  # npm run dev

COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /work