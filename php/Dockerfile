FROM php:7.2-fpm
RUN docker-php-ext-install mysqli pdo_mysql 
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

