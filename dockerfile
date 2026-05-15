FROM php:8.2-apache

##comando para baixar e instalar o mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

##comando que garante que o servidor apache tenha as permissões necessárias para operar
RUN chown -R www-data:www-data /var/www/html