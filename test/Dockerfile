# Use the official PHP image as the base image
FROM php:7.4-apache
# Install the required extensions and dependencies for PDO MySQL

#ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y --no-install-recommends apt-utils \
&& apt-get install -y libpq-dev libzip-dev \
&& docker-php-ext-install pdo pdo_mysql zip

RUN echo 'debconf debconf/frontend select Noninteractive' | debconf-set-selections
# Set the working directory in the container

WORKDIR /var/www/html

# Copy your PHP application files to the container
 
COPY . /var/www/html

# Epose the container's port 8

EXPOSE 80
# Start the Apache server
CMD ["apache2-foreground"]