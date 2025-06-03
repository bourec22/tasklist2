FROM php:8.2-apache
# Install dependencies
RUN docker-php-ext-install pdo pdo_mysql mysqli
# Enable Apache modules
RUN a2enmod rewrite headers
# Copy custom configuration files
workdir /var/www/html
copy ./app /var/www/html
# Set permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html