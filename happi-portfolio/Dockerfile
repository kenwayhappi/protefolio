# Utilise une image PHP officielle avec Apache
FROM php:8.2-apache

# Installe les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Copie le code source
COPY . /var/www/html

# Active mod_rewrite pour Laravel
RUN a2enmod rewrite

# Donne les bons droits
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Change la racine vers le dossier public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Met à jour la configuration Apache
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

# Expose le port 80
EXPOSE 80
