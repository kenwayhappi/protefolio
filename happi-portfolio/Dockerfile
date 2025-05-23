FROM php:8.2-apache

# Installe les extensions nécessaires et curl pour Composer
RUN apt-get update && apt-get install -y \
    libzip-dev unzip curl \
    && docker-php-ext-install zip pdo pdo_mysql \
    && a2enmod rewrite

# Installe Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copie les fichiers du projet
COPY . /var/www/html

WORKDIR /var/www/html

# Installe les dépendances PHP via Composer
RUN composer install --no-dev --optimize-autoloader

# Change la racine du document Apache vers public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

# Droits nécessaires
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
