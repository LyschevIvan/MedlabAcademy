FROM php:8.2-apache
COPY *.php /var/www/html
COPY /static /var/www/html/static
EXPOSE 80