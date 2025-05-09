#!/bin/bash
set -e

echo "➡️ Запуск деплоя"

# Переносить public/ больше не нужно — уже перенесли вручную

# Обновим index.php на случай, если не поменяли
sed -i 's#require __DIR__.\.\./vendor#require __DIR__/vendor#' index.php
sed -i 's#require_once __DIR__.\.\./bootstrap#require_once __DIR__/bootstrap#' index.php

# Установка зависимостей
composer install --no-dev --optimize-autoloader

# Генерация ключа (если нет)
if ! grep -q "^APP_KEY=" .env; then
  cp .env.example .env
  php artisan key:generate
fi

# Кеши
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Права
chmod -R 755 storage bootstrap/cache

echo "✅ Деплой завершён"
