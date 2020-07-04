# User Framework

## Requirements

- PHP 7.x
- MySql
- PHPUnit
- Composer

## Setting up

- clone this repo into a local directory
- To install dependencies, run `composer update`
- Create a new database called "Formstack"
- Edit [db/config/dbconnector.php] to have the correct credentials for the localhost database
- To migrate the database, run `vendor/bin/phinx migrate`
- To run the unit test. run `vendor/bin/phpunit tests/UserTest.php`
  - This will run the create, read, update, and delete user methods in the User model.
- To view the results in the web browser, start up the php server with `php -S 127.0.0.1:8080`
- As seen in index.php, the routes can be tested at `/user-create`, `/user-read`, `/user-update`, and `/user-delete`
