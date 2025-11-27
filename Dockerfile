FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install pdo_mysql pdo_sqlite zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Configure Apache Document Root to /public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy composer files first for better caching
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

# Copy application code
COPY . .

# Complete composer installation
RUN composer dump-autoload --no-dev --optimize

# Create .env file and set up Laravel
RUN cp .env.example .env \
    && php artisan key:generate \
    && touch database/database.sqlite \
    && php artisan config:clear \
    && php artisan cache:clear \
    && php artisan view:clear

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80
