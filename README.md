# Laravel Blog project

*Commands to clone this project from GitHub*

1. git clone https://github.com/alpernuage/Laravel-Blog.git
2. composer install
3. cp .env.example .env
4. php artisan key:generate, *(if needed)*
5. php artisan migrate
6. php artisan serve
7. Go to link localhost:8000

## Terminal Commands to start the project

* `php artisan make:model Post -a` to create all files dependent to Post model
* `php artisan make:model Category -m` to create Category model and migration file
* `php artisan make:factory CategoryFactory --model=Category` to create factory of Category model
* `php artisan migrate --seed` to proceed migration and seed.
* **If an error occurs**, run `php artisan migrate:refresh --seed` to proceed
  migration and seed` after debug. This command calls down method in migration file to rollback operation

## Install [Laravel Breeze](https://laravel.com/docs/9.x/starter-kits) to authentication system

* `composer require laravel/breeze --dev`
* `php artisan breeze:install`
* `php artisan migrate`
* `npm install`
* `npm run dev`
