# IT0049 TFA5 - From Zero to Four Pages: Laravel POS Foundations

A Laravel 13 rebuild of the TFA1 Point-of-Sale application. It has four pages, and the account pages use a static PHP array as a temporary data source.

## Pages

| URL | Controller | View |
|---|---|---|
| `/` | `PageController@home` | `resources/views/home.blade.php` |
| `/about` | `PageController@about` | `resources/views/about.blade.php` |
| `/customers` | `CustomerController@index` | `resources/views/customers.blade.php` |
| `/users` | `UserController@index` | `resources/views/users.blade.php` |

Shared layout and navigation: `resources/views/layouts/app.blade.php`

## Requirements

- PHP 8.3 or higher (Laravel 13 requirement)
- Composer
- PHP extensions: mbstring, openssl, pdo_sqlite, pdo_mysql, fileinfo, curl, zip

## How to Run Locally

```bash
git clone https://github.com/Quack-Duckkk/1TSY2627_IT0049_TW32-11_tfa5-laravel-pos.git
cd 1TSY2627_IT0049_TW32-11_tfa5-laravel-pos
composer install
copy .env.example .env
php artisan key:generate
php artisan serve
```

Then open http://127.0.0.1:8000

On macOS/Linux, use `cp .env.example .env` instead of `copy`.

## Database Files

The project includes Laravel's default migrations (`database/migrations`) and seeder (`database/seeders/DatabaseSeeder.php`). The Customer and User pages do not read from a database yet. They use static arrays defined in `CustomerController` and `UserController`.

## Live Site

This project is not hosted online. Run it locally using the steps above.

