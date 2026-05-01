FROM php:8.2-apache

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libwebp-dev \
    libfreetype6-dev zip unzip \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
        --with-webp \
    && docker-php-ext-install gd mbstring

# Enable Apache mod_rewrite (important for Bludit URLs)
RUN a2enmod rewrite

# Set Apache to use /var/www/html
WORKDIR /var/www/html

# Copy Bludit files
COPY bludit/ /var/www/html/

# Fix permissions (important for content writing)
RUN chown -R www-data:www-data /var/www/html

# Apache runs on port 80
EXPOSE 80