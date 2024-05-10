
FROM php:7.4-fpm

# Installing dependencies
RUN apt-get update && apt-get install -y --no-install-recommends \
    build-essential \
    default-mysql-client \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libmagickwand-dev \
    libzip-dev \
    libonig-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    && pecl install imagick

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Installing extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath opcache intl
RUN docker-php-ext-enable imagick

# Installing composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy your application code
COPY . /var/www

# Change the working directory
WORKDIR /var/www

# Run composer install
RUN composer install --no-dev --prefer-dist --no-interaction

CMD ["php-fpm", "-y", "/usr/local/etc/php-fpm.conf", "-R"]

# Node.js Stage
FROM node:14.16-alpine3.12

WORKDIR /var/www

# Copy the necessary files from the previous stage
COPY --from=0 /var/www /var/www

# Install production dependencies
RUN npm install --production=true

# Run production build
RUN npm run prod