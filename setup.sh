#!/bin/bash
echo "Start migrations"
php artisan migrate

echo "Start importing database"
mysql -h${MYSQL_HOST} -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE} < laravel.sql

echo "Done"
