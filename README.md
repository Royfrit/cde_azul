# UNERG - Electiva de Área II

## Requisitos de Instalación

* Servidor Web (Preferiblemente Apache, con `mod_rewrite` activado)
* PHP 5.3 o superior
* Servidor de Base de Datos MySql
* Git
* Bower

## Instalación

* Clonar el repositorio, e ir al directorio

        git clone https://github.com/arodu/cde_azul
        cd cde_azul

* Establecer permisos de escritura a la carpeta `app/tmp`

        sudo chmod 777 app/tmp/ -R

* Copiar archivo de configuración de la base de datos, e ingresar los datos

        cp app/Config/database.php.default app/Config/database.php

* Abrir archivo `app/Config/database.php` e ingresar los datos de login (nombre de usuario mysql), password (Contraseña del usuario) y database (nombre de la bdd a utilizar)

* Ejecutar schema de creacion de base de datos
    (aun falta definir esto)

        app/Console/cake schema create

* Ir a la direccion [http://localhost/cde_azul](http://localhost/cde_azul)


[![CakePHP](http://cakephp.org/img/default/cake-logo-smaller3.png)](http://www.cakephp.org)
