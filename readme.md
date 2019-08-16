## How to use
1. git clone this repository and cd to directory
2. composer install
3. cp .env.example .env
4. php artisan key:generate
5. fill .env with your database credentials
6. php artisan migrate:fresh --seed
7. php artisan serve


#### API Documentation
API documentation can be found here: http://127.0.0.1:8000/docs/ (after "php artisan serve" command)

#### Feature tests
run "phpunit" or 
."/vendor/bin/phpunit"
