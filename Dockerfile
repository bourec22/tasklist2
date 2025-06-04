FROM php:8.2-apache
# Install additional PHP extensions
RUN apt-get update -y && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libicu-dev \
    libgettextpo-dev \
    zip \
    git \
    unzip

RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gettext intl pdo_mysql gd zip

# Copy Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite headers
# Copy custom configuration files
WORKDIR /var/www/html
COPY ./app /var/www/html
# Set permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html
# Expose port 80
EXPOSE 80