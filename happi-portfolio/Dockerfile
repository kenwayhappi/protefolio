FROM php:8.2-apache

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    curl \
    git \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier le code Laravel
COPY . /var/www/html

# Définir le répertoire de travail
WORKDIR /var/www/html

# Donner les bonnes permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exposer le port 80
EXPOSE 80

# Commande de démarrage (Apache)
CMD ["apache2-foreground"]
