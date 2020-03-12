#!/bin/sh

# Install vendors without dev in production
composer install --optimize-autoloader --no-dev;

# FIX PERMISSIONS
chown -R root:http *;
find ./storage -type d -exec chmod 775 {} \;
find ./bootstrap/cache/ -type d -exec chmod 775 {} \;
find ./storage -type f -exec chmod 664 {} \;
find ./bootstrap/cache/ -type f -exec chmod 664 {} \;

# Copy relevent .env file depending on type of deployment
cp .env.production .env; echo ".env.production file has been copied";

php artisan key:generate

php artisan storage:link

npm install
npm run production

touch database/database.sqlite

php artisan migrate --seed
