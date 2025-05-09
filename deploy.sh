#!/bin/bash
set -e

echo "🚀 Начало деплоя..."

# 1. Установка composer-зависимостей (Laravel не работает без vendor/)
composer install --no-dev --optimize-autoloader

# 2. Если .env отсутствует — копируем и генерим ключ
if [ ! -f .env ]; then
  cp .env.example .env
  php artisan key:generate
fi

# 3. Кешируем конфиг, роуты и шаблоны (ускоряет работу)
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 4. Права на storage и bootstrap/cache
chmod -R 755 storage bootstrap/cache

echo "✅ Деплой завершён успешно!"
