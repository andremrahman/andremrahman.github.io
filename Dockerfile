# 1. Base PHP + FPM
FROM php:8.2-fpm

# 2. Install Tools & Extensions
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    nginx \
    nodejs \
    npm \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    --no-install-recommends && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo pdo_mysql mbstring gd

# 3. Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Workdir
WORKDIR /var/www/html

# 5. Copy files
COPY . .

# 6. Install PHP & Node dependency
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# 7. Remove default Nginx config (kadang file ini tidak ada → AMAN kalau menggunakan -f)
RUN rm -f /etc/nginx/conf.d/default.conf

# 8. Copy Nginx config kita
COPY nginx.conf /etc/nginx/conf.d/app.conf

# 9. Permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# 10. Copy Entrypoint
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 80

CMD ["entrypoint.sh"]
