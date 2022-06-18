#!/bin/bash

echo 'Installation des vendors'

composer update

echo 'Installation des dependances JS'

npm install && npm run dev

echo 'creation de la structure de la db'
php artisan migrate --force

echo 'import des données'
php artisan db:seed UserSeeder --force
php artisan db:seed CategorieSeeder --force
php artisan db:seed JeuxSeeder --force

echo 'Generation de la clé'

php artisan key:generate

php artisan config:cache

# Définition des droits

chown -R www-data /var/www/html