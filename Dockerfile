# Use official PHP image with Apache
FROM php:8.1-apache

# Enable Apache mod_rewrite (common for PHP apps)
RUN a2enmod rewrite

# Install system dependencies and PHP extensions (adjust if needed)
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip \
    && docker-php-ext-install zip pdo pdo_mysql

# Copy your app into the container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Install Composer (copy from the official composer image)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Run composer install to install dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose port 80
EXPOSE 80

# Start Apache (default command for php:apache image)
CMD ["apache2-foreground"]
