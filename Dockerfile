FROM php:8.2-fpm

RUN apt-get update && apt-get install -y nodejs npm default-mysql-client
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#Copy and set project directory
WORKDIR /app
COPY . /app/.

# Install packages
RUN npm install
RUN npm run dev
RUN composer install
RUN php artisan key:generate
CMD php artisan serve --host=0.0.0.0 --port=8000

EXPOSE 8000
