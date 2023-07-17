# Use the official PHP image as the base image
FROM php:7.4-apache
# Install the required extensions and dependencies for PDO MySQL


RUN apt-get update && apt-get install -y --no-install-recommends apt-utils \
&& apt-get install -y libpq-dev libzip-dev \
&& docker-php-ext-install pdo pdo_mysql zip


WORKDIR /var/www/html

 
COPY . /var/www/html

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf &&echo "DirectoryIndex adminer.php" >> /etc/apache2/apache2.conf
# Start the Apache server
CMD ["apache2-foreground"]
