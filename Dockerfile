FROM php:8.2-fpm

# Install required packages
RUN apt-get update -y && apt-get install -y \
    openssl \
    zip \
    unzip \
    git \
    libicu-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo intl gd

# Set PHP configurations
RUN echo "upload_max_filesize = 512M" > /usr/local/etc/php/conf.d/uploads.ini \
    && echo "post_max_size = 512M" >> /usr/local/etc/php/conf.d/uploads.ini \
    && echo "max_execution_time = 1200" >> /usr/local/etc/php/conf.d/uploads.ini

# Set the working directory
WORKDIR /app

# Copy application files
COPY . /app

# Add admin user
RUN useradd -ms /bin/bash admin

# Change the owner and group of the writable directory
RUN chown -R nobody:root writable

# Change permissions of the writable directory
RUN chmod 755 writable

# Switch to a non-root user before running Composer
USER admin

# Install PHP dependencies using Composer
RUN composer install

# Switch back to root to start the PHP server
USER root

# Start PHP server
CMD ["php", "spark", "serve", "--host", "0.0.0.0", "--port", "8080"]

# Expose port 8080
EXPOSE 8080
