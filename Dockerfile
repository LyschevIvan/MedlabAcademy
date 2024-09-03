FROM nginx:latest
RUN mkdir -p /var/www/html/static
COPY *.php /var/www/html
COPY /static /var/www/html/static
EXPOSE 80