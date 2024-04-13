# # Build and serve the PHP files
FROM php:8-apache

RUN a2enmod rewrite
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

USER nobody

WORKDIR /var/www/html/

# Copy PHP files into the container
COPY . .

EXPOSE 80/tcp