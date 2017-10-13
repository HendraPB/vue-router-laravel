# vue-router-laravel
Using vue-router in Laravel.

I have a problem in using vue-router nested routes in webpack

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
