# IT0049 TFA6 - From Arrays to Eloquent: Laravel POS

This project continues the TFA5 Laravel POS application. The Customer Accounts and User Accounts pages now retrieve database records through Eloquent instead of static PHP arrays.

## Features

- Four pages with shared navigation: Home, About, Customers, and Users.
- Database migrations for customer and user records.
- Customer and User Eloquent models.
- A POS seeder containing five sample customers and five sample users.
- Blade views that display database records using @foreach.
- Unique usernames and hashed user passwords.

## Pages

| URL | Controller | View |
|---|---|---|
| `/` | `PageController@home` | `resources/views/home.blade.php` |
| `/about` | `PageController@about` | `resources/views/about.blade.php` |
| `/customers` | `CustomerController@index` | `resources/views/customers.blade.php` |
| `/users` | `UserController@index` | `resources/views/users.blade.php` |

Shared layout: `resources/views/layouts/app.blade.php`

## Requirements

- PHP compatible with the project's `^8.3` constraint.
- Composer.
- Laravel-required PHP extensions, including PDO and SQLite support.
- Git.

Development environment: Windows, PowerShell, PHP 8.4.28, Laravel 13.44.1, and SQLite.

## How to Run Locally

Run these commands in PowerShell:

```powershell
git clone https://github.com/Quack-Duckkk/1TSY2627_IT0049_TW32-11_tfa5-laravel-pos.git
cd 1TSY2627_IT0049_TW32-11_tfa5-laravel-pos
composer install
Copy-Item .env.example .env
php artisan key:generate
```

In the newly created `.env` file, set:

```ini
DB_CONNECTION=sqlite
```

Leave `DB_DATABASE` unset so Laravel uses `database/database.sqlite`.

Create the SQLite file if it does not already exist:

```powershell
if (!(Test-Path .\database\database.sqlite)) {
    New-Item -Path .\database\database.sqlite -ItemType File | Out-Null
}
```

Create the tables, seed the sample records, and start the development server:

```powershell
php artisan migrate
php artisan db:seed
php artisan serve
```

Open the address shown by Artisan, normally:

http://127.0.0.1:8000

On macOS/Linux, use `cp .env.example .env` and `touch database/database.sqlite` instead of the PowerShell file commands.

## Database Structure

### Customers

| Column | Type |
|---|---|
| id | Auto-incrementing primary key |
| full_name | String |
| email | String |
| phone | String, maximum 20 characters |
| created_at / updated_at | Timestamps |

Phone numbers use strings to preserve leading zeros and formatting.

### Users

The default users table is updated through a separate migration:

- `name` is renamed to `full_name`.
- A required, unique `username` is added.
- Existing records receive usernames such as `user1`, based on their IDs.
- Default email, password, verification, token, and timestamp columns are retained.

## Migrations and Seeders

TFA6 migration files:

- `database/migrations/2026_11_27_152641_create_customers_table.php`
- `database/migrations/2026_11_27_152827_add_username_and_full_name_to_users_table.php`

Seeder files:

- `database/seeders/DatabaseSeeder.php`
- `database/seeders/PosSeeder.php`

`DatabaseSeeder` calls `PosSeeder`. The POS seeder uses `firstOrCreate()` with email addresses to avoid duplicating its sample records when rerun.

New sample users receive hashed passwords. Existing users matched by email are left unchanged.

The migrations and seeders are included so the database can be recreated without a separate SQL export.

## How Records Are Displayed

1. A route calls the appropriate controller.
2. The controller retrieves records through the Customer or User model.
3. Records are ordered by ID and passed to a Blade view.
4. The view loops through the records using `@foreach`.
5. Blade's escaped `{{ }}` expressions display the field values.

## Manual Checks

After setup:

- Open `/` and `/about`.
- Check that navigation works between all four pages.
- Open `/customers` and confirm the five sample customers appear.
- Open `/users` and confirm the five sample users appear.
- Existing database records may also appear.

## Hosting

Hosting is not required for this activity, as instructed by our professor. Run the application locally using the setup steps above.

## Configuration

Keep `.env` and local database contents out of version control. Each environment should use its own configuration.