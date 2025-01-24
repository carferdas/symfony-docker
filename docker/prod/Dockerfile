FROM php:8.4-fpm-alpine

# System Dependencies
RUN apk add --no-cache curl wget libzip-dev postgresql-dev icu-dev bash git

# PHP Extensions
RUN docker-php-ext-install zip intl pdo pdo_pgsql

docker-php-ext-enable opcache

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY ../../.. /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/var /var/www/html/public

COPY ../entrypoint.sh /etc/entrypoint.sh

RUN chmod +x /etc/entrypoint.sh

ENTRYPOINT ["/etc/entrypoint.sh"]

EXPOSE 9000

CMD ["php-fpm"]