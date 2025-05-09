#!/bin/bash

set -e

echo "➡️ Старт деплоя Laravel в /httpdocs"

# 1. Переместить содержимое public/ в корень, если не перемещено
if [ -d public ]; then
  echo "📁 Перемещаю содержимое public/ в корень"
  cp -r public/* .
  rm -rf public
fi

# 2. Правим index.php (один раз)
echo "⚙️ Патчим index.php"
sed -i 's#require __DIR__.\.\./vendor#require __DIR__/vendor#' index.php
sed -i 's#require_once __DIR__.\.\./bootstrap#require_once __DIR__/bootstrap#' index.php

# 3. Устанавливаем зависимости
echo "📦 Устанавливаю зависимости через Composer"
composer install --no-dev --optimize-autoloader

# 4. Генерируем ключ, если нет
if ! grep -q "^APP_KEY=" .env; then
  echo "🔐 Генерация APP_KEY"
  php artisan key:generate
fi

# 5. Кешируем конфиги
echo "🚀 Кеширую конфиги и маршруты"
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 6. Права
echo "🔧 Выставляю права"
chmod -R 755 storage bootstrap/cache

echo "✅ Деплой завершён"
