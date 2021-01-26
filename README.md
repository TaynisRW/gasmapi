<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/TaynisRW/gasmapi/main/public/favicon.ico" width="150" height="150"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Guía para instalar el proyecto
**Desarrollo de una API de geolocalización con Laravel 7 para buscar los precios de la gasolina**

1. Descarga el repositorio
2. Descromprime la carpeta dentro del directorio de Valet/Laragon
3. Renombra la carpeta (Opcional) 
4. Entra a la carpeta desde la terminal `cd directorio/de/la/carpeta`
5. Copia el contenido del archivo `.env.example` a un nuevo archivo llamado `.env`
    * Si estás en Liunx o Mac puedes ejecutar el comando: `cp .env.example .env`
6. Crea una base de datos para el proyecto
7. Modifica las variables de conexión del nuevo archivo `.env` 
    * Define los datos de conexión 
        * DB_DATABASE=
        * DB_USERNAME=
        * DB_PASSWORD=
8. Ejecuta `composer install`
9. Ejecuta `php artisan key:generate`
10. En la carpeta `c://directorio/gasmapi/db-gasmapi` se encuetra el archivo `gasmapi.sql` el cual al importarlo generará la base de datos y cargará todos los datos de las tablas (opcional)
11. Ejecutar `php artisan migrate` para generar las tablas de la base de datos
12. Ejecuta  `php artisan migrate --seed` para migrar las tablas y los datos de prueba generados (opcional)
13. En la carpeta `c://directorio/gasmapi/db-gasmapi` se encuetran 2 archivos `zip-codes.sql` y `api-prices.sql` los cuales tienen los datos de los códigos postales y la API respectivamente, pueden importar esos archivos por separado si generaron las tablas mediante migrate
14. Ejecuta `npm install` o `yarn`
15. Ejecuta `npm run dev` o `yarn dev`
16. Es importante que si no estas usando Laragon para generar tu servidor de pruebas habrá que modificar las rutas para que el sistema funcione correctamente
    * En las carpetas
        * Routes
        * Public/Js
        * Resources
17. Abre la aplicación en el navegador
18. Registra un nuevo usuario y ya puedes comenzar a utilizar la aplicación

## License
Licensed under the [MIT license](https://opensource.org/licenses/MIT).
