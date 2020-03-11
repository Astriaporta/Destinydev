#!/bin/sh

# Install vendors without dev in production
composer install --prefer-dist --no-ansi --no-interaction --no-progress --no-scripts -o --no-dev;

# FIX PERMISSIONS
chown -R root:http *;
chmod -R 755 storage;
chmod -R 755 bootstrap/cache/;

# Copy relevent .env file depending on type of deployment
cp .env.production .env; echo ".env.production file has been copied";

php artisan key:generate

php artisan storage:link

npm install
npm run production
