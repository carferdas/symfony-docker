FROM php:8.4-fpm-alpine

# System Dependencies
RUN apk add --no-cache curl wget libzip-dev postgresql-dev icu-dev bash git autoconf linux-headers g++ make rabbitmq-c-dev

# PHP Extensions
RUN docker-php-ext-install zip intl pdo pdo_pgsql

RUN pecl install xdebug amqp redis && docker-php-ext-enable xdebug amqp redis

RUN mkdir -p /var/log \
	&& mkdir -p /var/www/html/var \
	&& mkdir -p /var/www/html/public \
    && touch /var/log/xdebug.log \
    && chmod 777 /var/log/xdebug.log 

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY ../.. /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/var /var/www/html/public

COPY /docker/entrypoint.sh /etc/entrypoint.sh

RUN chmod +x /etc/entrypoint.sh

ENTRYPOINT ["/etc/entrypoint.sh"]

EXPOSE 9000

CMD ["php-fpm"]
