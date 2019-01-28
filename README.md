# vue-router-laravel
use Vue-Router on Laravel to create an SPA that will call the API on Laravel route

# Feature
SPA
Vue.js
Webpack (Laravel Mix)
Laravel Framework
SQLite
Migration and Seeder Generator

## Installation

``` bash
#clone repo
git clone https://github.com/HendraPB/vue-router-laravel.git

# change your directory to project
cd vue-router-laravel

# install dependencies
npm install

# run webpack
npm run dev

# install laravel dependencies
composer install

# touch database
touch database/database.sqlite

# configure installation
cp env.example .env

# migration and seed database
php artisan migrate:refresh --seed

# generate unique key for the project
php artisan key:generate

# run project in localhost:8000
php artisan serve
