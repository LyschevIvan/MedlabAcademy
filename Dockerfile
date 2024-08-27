FROM nginx:latest
COPY *.php /var/www/html
COPY static/ /var/www/html/static
EXPOSE 80