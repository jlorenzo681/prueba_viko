# prueba_viko
 
REQUISITOS
1. Instalar Git
2. Instalar composer
3. Instalar el binario de Symfony: https://symfony.com/download
4. Servidor de base de datos MySQL/MariaDB en local

INSTALACIÓN
1. Clonar el proyecto
git clone https://github.com/jlorenzo681/prueba_viko.git

2. Entrar en el directorio
cd prueba_viko

3. Instalar las dependencias
composer install

4. Crear base de datos y tablas
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

5. Importar user.sql

6. Editar el fichero .env para utilizar una cadena de conexión a BD válida, editando las variables db_user, db_password

6. Arrancar el servidor de pruebas
symfony server:start
