FROM php:8.2-cli

# System dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    zip \
    libzip-dev \
    nodejs \
    npm

# Install PHP extensions (THIS FIXES "could not find driver")
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

# Install backend dependencies
RUN composer install --no-dev --optimize-autoloader

# Install frontend assets
RUN npm install && npm run build

# Expose port
EXPOSE 10000

# Start Laravel
CMD php -S 0.0.0.0:10000 -t public
