#!/bin/sh

cd /var/www/html

echo "COMPOSER INSTALL"
if [ ! -d "/var/www/html/vendor" ]; then
    COMPOSER_MEMORY_LIMIT=-1 composer install --optimize-autoloader --no-interaction --no-progress
else
    echo "VENDOR EXIST"
fi

exec "$@"