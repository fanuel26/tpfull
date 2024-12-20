# Use the official PHP image as the base
FROM php:8.1-fpm

# Set the working directory inside the container
WORKDIR /var/www

# Install dependencies and utilities
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    unzip \
    libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql xml

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the application files into the container
COPY . .

# Install Composer dependencies
RUN composer install --no-dev --optimize-autoloader

# Set appropriate file permissions for the Laravel project
RUN chown -R www-data:www-data /var/www && chmod -R 775 /var/www/storage

# Expose port 9000 to communicate with NGINX
EXPOSE 9000

# Command to run PHP-FPM
CMD ["php-fpm"]
