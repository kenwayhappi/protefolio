FROM php:8.2-apache

# Installe les extensions nécessaires et curl pour Composer
RUN apt-get update && apt-get install -y \
    libzip-dev unzip curl \
    && docker-php-ext-install zip pdo pdo_mysql \
    && a2enmod rewrite

# Installe Node.js et npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@latest

# Installe Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copie les fichiers du projet
COPY . /var/www/html

WORKDIR /var/www/html

# Installe les dépendances PHP via Composer
RUN composer install --no-dev --optimize-autoloader

# Installe les dépendances Node
RUN npm install

# Construit Vite pour la production
RUN npm run build

# Vérifie les fichiers générés
RUN ls -la /var/www/html/public/build
RUN ls -la /var/www/html/public/build/assets
RUN cat /var/www/html/public/build/manifest.json || echo "manifest.json non trouvé"

# Corrige les permissions
RUN chown -R www-data:www-data /var/www/html/public/build
RUN chmod -R 755 /var/www/html/public/build

# Change la racine du document Apache vers public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

# Ajoute ServerName pour supprimer l'avertissement Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Droits nécessaires pour Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
