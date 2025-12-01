#!/bin/bash
set -e

# Jalankan PHP FPM di background
echo "Starting PHP-FPM..."
php-fpm -D

# Jalankan Nginx di foreground
echo "Starting Nginx..."
exec nginx -g "daemon off;"