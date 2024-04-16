Installation required
- PHP 8.3.6
- Composer 2.7.2
- MySQL CLI 8.3.0

Steps after cloning
1. run `composer install`
2. create .env in root folder and copy env.example into the .env that is just created
3. run `php artisan migrate --seed` to migrate the tables and create some dummy data with seeder