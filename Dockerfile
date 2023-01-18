FROM php:7.4-apache
COPY . /var/www/html/
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql zip

WORKDIR /var/www/html/
EXPOSE 80
CMD ["apache2-foreground"]

