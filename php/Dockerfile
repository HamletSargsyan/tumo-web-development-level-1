# Используем официальный образ PHP
FROM php:8.0-fpm

# Устанавливаем дополнительные зависимости
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo_mysql zip

# Рабочая директория приложения
WORKDIR /var/www/html

# Копируем исходные файлы в рабочую директорию
COPY ./src/ /var/www/html/

# Опционально: устанавливаем права доступа
RUN chown -R www-data:www-data /var/www/html

# Экспортируем порт для взаимодействия с Nginx
EXPOSE 9000

# Запускаем PHP-FPM
CMD ["php-fpm"]
