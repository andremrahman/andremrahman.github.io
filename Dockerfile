# 1. Gunakan image PHP FPM (FastCGI Process Manager)
FROM php:8.2-fpm

# 2. Instal dependensi sistem yang dibutuhkan (Git, cURL, Node.js, NPM)
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm \
    --no-install-recommends && rm -rf /var/lib/apt/lists/*

# 3. Instal Composer secara global
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Atur direktori kerja (Tempat aplikasi akan berjalan)
WORKDIR /var/www/html

# 5. Salin semua source code dari GitHub
COPY . /var/www/html

# 6. JALANKAN SEMUA PERINTAH BUILD (Composer dan Vite/Tailwind)
RUN composer install --no-dev
RUN npm install
RUN npm run build

# 7. Atur izin file untuk folder storage dan cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 8. Ekspor port FPM
EXPOSE 9000

# 9. Perintah startup (Menjalankan FPM)
CMD ["php-fpm"]