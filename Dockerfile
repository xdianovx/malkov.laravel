FROM php:8.2.11-fpm

# Установка необходимых библиотек
RUN apt update && apt install -y \
    build-essential \
    git \
    curl \
    libcurl4-openssl-dev \
    libzip-dev \
    zip \
    libpq-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libfreetype6-dev \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip pdo pdo_pgsql \
    && docker-php-ext-configure gd --with-jpeg --with-freetype \
    && docker-php-ext-install gd

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# NVM и Node.js
RUN mkdir /usr/local/nvm
ENV NVM_DIR /usr/local/nvm
ENV NODE_VERSION 22.3.0
RUN curl https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.7/install.sh | bash \
    && . $NVM_DIR/nvm.sh \
    && nvm install $NODE_VERSION \
    && nvm alias default $NODE_VERSION \
    && nvm use default

ENV NODE_PATH $NVM_DIR/v$NODE_VERSION/lib/node_modules
ENV PATH $NVM_DIR/versions/node/v$NODE_VERSION/bin:$PATH

WORKDIR /var/www/malkov

# Добавление пользователя
RUN groupadd -g 1000 www && \
    useradd -u 1000 -ms /bin/bash -g www www

# Копирование файлов проекта
COPY . /var/www/malkov
COPY --chown=www:www . /var/www/malkov

# Создание директорий и установка прав
RUN mkdir -p /var/www/malkov/storage /var/www/malkov/bootstrap/cache
RUN chmod -R 775 /var/www/malkov/storage /var/www/malkov/bootstrap/cache
RUN chown -R www:www /var/www/malkov

# Переключение на пользователя www
USER www

EXPOSE 9000
CMD ["php-fpm"]
