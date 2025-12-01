# 1. Gunakan image PHP FPM (Base)
FROM php:8.2-fpm

# 2. Instal dependensi sistem, TERMASUK NGINX
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
    nginx \
    --no-install-recommends && rm -rf /var/lib/apt/lists/*

# 3. Instal Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Atur direktori kerja
WORKDIR /var/www/html

# 5. Salin semua source code
COPY . /var/www/html

# 6. JALANKAN SEMUA PERINTAH BUILD (Composer dan Vite/Tailwind)
RUN composer install --no-dev
RUN npm install
# Hati-hati, pastikan perintah ini sesuai dengan package.json Anda, umumnya 'build'
RUN npm run build 

# 7. Konfigurasi NGINX
# Hapus konfigurasi default Nginx
RUN rm /etc/nginx/conf.d/default.conf

# Salin konfigurasi Nginx kustom kita (membutuhkan file nginx.conf)
COPY nginx.conf /etc/nginx/conf.d/app.conf

# Atur izin file untuk Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 8. Entrypoint Script
# Salin entrypoint script (membutuhkan file entrypoint.sh) dan berikan izin eksekusi
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# 9. Ekspor Port Nginx (Port yang dicari Render)
EXPOSE 80

# 10. Perintah startup: Gunakan Entrypoint Script untuk menjalankan Nginx dan PHP-FPM
CMD ["entrypoint.sh"]