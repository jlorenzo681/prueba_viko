# prueba_viko

This is a test to show basic authentication using Symfony, password is UNSECURE for testing purposes
 
REQUIREMENTS
1. Install Git
2. Install composer
3. Install Symfony binary: https://symfony.com/download
4. Install MySQL/MariaDB server


INSTALLATION
1. Clone project
git clone https://github.com/jlorenzo681/prueba_viko.git


2. Change to base directory
cd prueba_viko


3. Install dependencies
composer install


4. Create database and migrations
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate


5. Import file user.sql


6. Edit .env to use a valid DB connection, edit variables db_user and db_password


7. Start the server
symfony server:start
