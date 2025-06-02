# Use PHP 8.1 with Apache
FROM php:8.1-apache

# Enable Apache mod_rewrite for Laravel or clean URLs
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Set the document root to public/
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update Apache config to use public/ as the web root
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    && docker-php-ext-install zip pdo pdo_mysql

# Copy composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy only composer files and install first (cache efficient)
COPY composer.json composer.lock ./

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Copy everything else
COPY . .

# Set correct file permissions (optional but recommended)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
