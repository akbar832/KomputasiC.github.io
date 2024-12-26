# Gunakan image PHP dengan Apache
FROM php:8.0-apache

# Salin semua file proyek Anda ke direktori web server
COPY . /var/www/html

# Pastikan ekstensi mysqli terinstall jika Anda menggunakan MySQL
RUN docker-php-ext-install mysqli

# Set default command untuk menjalankan Apache
CMD ["apache2-foreground"]
