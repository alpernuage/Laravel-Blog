# Laravel Blog project

*Commands to clone this project from GitHub*

1. git clone https://github.com/alpernuage/Laravel-Blog.git
2. composer install
3. cp .env.example .env
4. php artisan key:generate, *(if needed)*
5. php artisan migrate
6. php artisan serve
7. Go to link localhost:8000

## Terminal Commands to run the project

* `php artisan make:model Post -a` to create all files dependent to Post model  
  *(Model, Factory, Migration, Seeder, Request, Controller, Policy)*
* `php artisan make:model Category -m` to create Category model and migration file
* `php artisan make:factory CategoryFactory --model=Category` to create factory of Category model
* `php artisan migrate --seed` to proceed migration and seed.
* **If an error occurs**, run `php artisan migrate:refresh --seed` to proceed
  migration and seed` after debug. This command calls down method in migration file to rollback operation
* `php artisan make:request StorePostRequest` to create validation file for store method

## Install [Laravel Breeze](https://laravel.com/docs/9.x/starter-kits) for the authentication system

* `composer require laravel/breeze --dev`
* `php artisan breeze:install`
* `php artisan migrate`
* `npm install`
* `npm run dev`
* Update [node](https://nodejs.org/en/download/) version if needed *(Ex:failed to load config from vite.config.js)*

### Image treatment
* Change **FILESYSTEM_DISK=public** in .env file
* `php artisan storage:link` to link storage folder in root to public/storage folder. A storage folder is created in public folder to as reflection of root's storage folder
