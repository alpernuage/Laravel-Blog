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
* `php artisan storage:link` to link storage folder in root to public/storage folder. A storage folder is created in
  public folder to as reflection of root's storage folder

### Debug Tips

* Error: *Invalid route action: [App\Http\Controllers\DashboardController].*, solution: Declare **Route::get('
  /dashboard', [DashboardController::class, 'index'])** instead of *Route::get('/dashboard'), DashboardController::
  class, 'index')*
* If there is no href content you have to put `<a href="#"`. If your href attribute is empty like this `<a href=""`  
  **onclick="event.preventDefault** won't work to prevent previous action

## Page visuals

Login

[//]: # (![Login!]&#40;public/pages/Login.png&#41;)
![Login!](https://user-images.githubusercontent.com/50120472/189345943-bfae0db0-1883-41d1-9c26-334f863b376c.png)

Register

[//]: # (![Register!]&#40;public/pages/Register.png&#41;)
![Register!](https://user-images.githubusercontent.com/50120472/189345949-09de1aa6-3fc9-472e-bde6-9bb02df20ad0.png)

Posts

[//]: # (![Posts!]&#40;public/pages/Posts.png&#41;)
![Posts!](https://user-images.githubusercontent.com/50120472/189345948-1c8c10f2-a475-4afc-9e36-e79ee36d75fe.png)

Actions

[//]: # (![Actions!]&#40;public/pages/Actions.png&#41;)
![Actions!](https://user-images.githubusercontent.com/50120472/189345499-8e35a918-4a22-4252-be6e-f29183cfd10e.png)

Create

[//]: # (![Create!]&#40;public/pages/Create.png&#41;)
![Create!](https://user-images.githubusercontent.com/50120472/189345932-cdfd1cf0-dba1-496d-bd9b-6ca5cd26921a.png)

Edit

[//]: # (![Edit!]&#40;public/pages/Edit.png&#41;)
![Edit!](https://user-images.githubusercontent.com/50120472/189345940-d50a155c-25c1-46a0-859b-1bc0076539a2.png)

Delete

[//]: # (![Delete!]&#40;public/pages/Delete.png&#41;  )
![Delete!](https://user-images.githubusercontent.com/50120472/189346816-e3637692-8ec8-4a3a-b577-edfe48d18cff.png)

#### image links are got from GitHub Issues page:

* Click on Issues tab in a GitHub repository
* Click on "New issue"
* Click on "Submit new issue"
* Drag and drop images into text area
* Get url of each image (between parenthesis)
