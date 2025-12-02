# ================================
# 1. Base Image: PHP 8.2 FPM
# ================================
FROM php:8.2-fpm

# ================================
# 2. Install dependencies
# ================================
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    supervisor \
    nginx \
    --no-install-recommends \
    && rm -rf /var/lib/apt/lists/*

# ================================
# 3. Install Node.js (NodeSource)
# ================================
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# ================================
# 4. Install Composer
# ================================
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ================================
# 5. Set Working Directory
# ================================
WORKDIR /var/www/html

# ================================
# 6. Copy project files
# ================================
COPY . /var/www/html

# ================================
# 7. Install PHP & Node dependencies
# ================================
RUN composer install --no-dev --optimize-autoloader

RUN npm install
RUN npm run build

# ================================
# 8. Fix permissions
# ================================
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# ================================
# 9. Nginx config
# ================================
# Hapus default Nginx config (path benar untuk Debian-based nginx)
RUN rm -f /etc/nginx/sites-enabled/default

# Copy config kita
COPY nginx.conf /etc/nginx/sites-enabled/app.conf

# ================================
# 10. Entrypoint Script
# ================================
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# ================================
# 11. Expose port untuk Render
# ================================
EXPOSE 80

# ================================
# 12. Start Nginx + PHP-FPM
# ================================
CMD ["entrypoint.sh"]
