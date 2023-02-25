Laravel-admin Extension - Admin Users
======

## Installation
````bash
php composer require laravelpack/admin-users
````

````bash
php artisan vendor:publish --provider="LaravelPack\AdminUsers\AdminUsersServiceProvider"
````

````bash
php artisan migrate
php artisan db:seed --class=AdminTablesSeeder
````