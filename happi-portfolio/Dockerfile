FROM php:8.2-apache

# Installe les extensions nécessaires
RUN apt-get update && apt-get install -y \
    libzip-dev unzip curl sqlite3 libsqlite3-dev \
    && docker-php-ext-install zip pdo pdo_mysql pdo_sqlite \
    && a2enmod rewrite

# Installe Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copie les fichiers
COPY . /var/www/html
WORKDIR /var/www/html

# Installe les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Définit le dossier public comme racine
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

# Autorisations nécessaires
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Génére le cache de config pour plus de perf
RUN php artisan config:cache \
 && php artisan route:cache \
 || echo "Artisan échoué (normal si .env manquant au build)"

EXPOSE 80
