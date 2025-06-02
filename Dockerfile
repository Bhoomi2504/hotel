# Use official PHP 8.1 image with Apache
FROM php:8.1-apache

# Install system dependencies required for Composer and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev zip \
    && docker-php-ext-install zip pdo pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite for pretty URLs
RUN a2enmod rewrite

# Copy Composer binary from official Composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory inside container
WORKDIR /var/www/html/

# Copy composer.json and composer.lock separately to leverage Docker cache
COPY composer.json ./

# Install PHP dependencies (production mode, no dev dependencies)
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# Now copy all application files
COPY . .

# Set proper permissions (optional, depends on your app)
RUN chown -R www-data:www-data /var/www/html/

# Expose port 80 for HTTP traffic
EXPOSE 80

# Start Apache in the foreground (default command)
CMD ["apache2-foreground"]
