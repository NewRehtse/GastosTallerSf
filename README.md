Charla taller introducción a Symfony2
=====================================

El código que se adjunta es el que se utilizó como práctica en la charla que impartí el 5 de Marzo de 2013.

Se trata de un gestor de gastos sencillos para gestionar libretas con varios gastos.

Para instalarlo no he subido al repositorio los vendors, así que habría que usar composer

    php composer.phar update
    
Para la base de datos, la que está configurada en para mysql en el fichero app/config/parameters.yml con los siguientes datos:

    database_host: 127.0.0.1
    database_name: gastos
    database_user: gastos
    database_password: gastos

Una vez creas la base de datos y configuras los parámetros, para crear las entidades basta con ejecutar el siguiente comando:

    php app/console doctrine:schema:update --force
    
Y una vez hecho esto acceder a la ruta: 

    http://localhost/gastos/web/app_dev.php/

(Suponiendo que en la carpeta gastos se incluyen todos los archivos de este repositorio)
