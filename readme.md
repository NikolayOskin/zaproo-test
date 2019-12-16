## Assignment description for the PHP Developer position:
Write a small API that uses a database backend using Laravel framework.

### Data:

The main data entity in your API is a "product". A product must have the following
fields/properties:  
● ID (integer, assigned automatically)  
● Name (alphanumeric, at most 100 characters)  
● Price (decimal, with 2 decimal places)  

The second data entity is “status”. There are two values for status: “In stock” and
“Out of stock”. The stock entity should be related to the product.

### Tasks:
1. Implement API calls for creating, updating and deleting these records.
2. Implement API calls for retrieving a list of products, and for searching a product by
name and/or by status.
3. Ensure that the API calls have proper error handling, and output sensible error
messages.
4. Document the API: explain the proper way to use it. Assume that the reader is not
familiar with the API, and will be using it as a service (having no access to the source
code).

Write the application in PHP. Use a MySQL database.  
Please submit to a git repository:  
● API source code (including a README file with deployment instructions);  
● SQL schema description;  
● Documentation.  

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
