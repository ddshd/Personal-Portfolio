# # Build and serve the PHP files

# # Use the trafex/php-nginx image
# FROM trafex/php-nginx:3.5.0

# USER root
# RUN sed -i '/LoadModule rewrite_module/s/^#//g' /usr/local/apache2/conf/httpd.conf

# RUN { \
#   echo 'IncludeOptional conf.d/*.conf'; \
# } >> /usr/local/apache2/conf/httpd.conf \
#   && mkdir /usr/local/apache2/conf.d

# USER nobody

# # Set the working directory to the web root
# WORKDIR /var/www/html

# # Copy PHP files into the container
# COPY . /var/www/html

# EXPOSE 8080/tcp 

FROM php:8-apache

RUN a2enmod rewrite
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

COPY iamdhrumilshah.com.conf /etc/apache2/sites-available/000-default.conf

USER nobody

WORKDIR /var/www/html/iamdhrumilshah.com

# Copy PHP files into the container
COPY . .

EXPOSE 80/tcp