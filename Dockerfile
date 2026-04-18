FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    unzip git curl zip nodejs npm libzip-dev

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

CMD php -S 0.0.0.0:10000 -t public
