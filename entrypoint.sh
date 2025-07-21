#!/bin/bash

echo "⏳ Waiting for MySQL to be ready..."

until php artisan migrate --force; do
  echo "🔁 Retrying migration in 5 seconds..."
  sleep 5
done

echo "✅ Migration successful"

echo "🌱 Running seeder..."
php artisan db:seed --force || true

echo "🚀 Starting services..."
exec /usr/bin/supervisord -c /etc/supervisord.conf
