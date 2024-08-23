# # Build and serve the PHP files
FROM php:8.3-apache

USER root

RUN a2enmod rewrite
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

WORKDIR /var/www/html/

# Copy PHP files into the container
COPY . .

RUN chown -R nobody /var/www/html/
# Get out of root user mode
USER nobody
EXPOSE 80/tcp