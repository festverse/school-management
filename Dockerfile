FROM php:8.2-apache

# Install required PHP extensions for Laravel and PostgreSQL
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git libpq-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql zip

# Enable Apache routing
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy all your code into the container
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --optimize-autoloader

# Prepare environment and SQLite database for standalone cloud deployment
RUN cp .env.example .env && php artisan key:generate
RUN touch /var/www/html/database/database.sqlite

# Set correct folder permissions for Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database /var/www/html/database/database.sqlite

# Point Apache to Laravel's public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copy and run the startup script
COPY start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

CMD ["start.sh"]