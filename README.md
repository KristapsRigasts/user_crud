## Users App
View all users
Create new user
Edit existing user
Delete existing user

## How to run App

* run command `composer install`
* create .env file. Copy .env.example data to .env file or use command: `cp .env.example .env`, replace with your mysql data to match your database.
* create database with name user_crud, or modify .env file (regarding mysql database).
* run `php artisan key:generate` to generate a new app key
* run command `php artisan migrate` to migrate tables to your database
* run command `php artisan serve` to view in browser
* in browser open `localhost`
