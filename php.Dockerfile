FROM php:8.1.4-apache
RUN docker-php-ext-install mysqli
RUN a2enmod rewrite
RUN service apache2 restart