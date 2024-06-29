<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instrucciones

Instalar php 8.2
Instalar composer
Descargar el repositorio de GitHub
Ejecutar composer update para actualizar librerias
Correr comando para generar llave de Laravel php artisan key:generate
Correr migraciones y creara base de datos php artisan migrate
Correr seed para insertar un usuario php artisan db:seed --class=UserSeeder
Ejecutar el servidor local php artisan serve

Ingresar a login con correo victor@example.com y contraseña victor.

## Laravel 11

Tuve algunos detalles con esta version:

No habia trabajado sqlite, esta sencilla pero se me complico y quito tiempo.
En laravel 11 cambia estructura y algunos archivos que busque no estan como en laravel 9 que es el que he trabajado mas.
El mandar parametros por url me ocasiona un error en la ruta para el edit por ejemplo.

