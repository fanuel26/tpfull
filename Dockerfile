# Étape 1 : Utiliser une image PHP avec les extensions nécessaires
FROM php:8.3-fpm

# Étape 2 : Installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl libpng-dev libonig-dev \
    libpq-dev libxml2-dev libssl-dev && \
    docker-php-ext-install pdo_mysql pdo_pgsql mbstring zip gd xml bcmath && \
    pecl install redis && docker-php-ext-enable redis

# Étape 3 : Installer Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Étape 4 : Configurer le répertoire de travail
WORKDIR /var/www/html/tpfull

# Étape 5 : Copier le projet Laravel dans le conteneur
COPY . /var/www/html/tpfull

# Étape 6 : Configurer les permissions
RUN chown -R www-data:www-data /var/www/html/tpfull/storage /var/www/html/tpfull/bootstrap/cache

# Étape 7 : Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Étape 8 : Exposer le port PHP
EXPOSE 9000

# Étape 9 : Commande par défaut pour PHP-FPM
CMD ["php-fpm"]
