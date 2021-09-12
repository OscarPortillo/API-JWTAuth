<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Api con JWT Autentificación

He creado una API que usa JWT para poder autentificarse.
## Pasos para poner el proyecto en funcionamiento.

- git clone https://github.com/OscarPortillo/API-JWTAuth.git
- composer install
- cp .env.example .env 'configurar el fichero a su gusto'.
- php artisan serve

## Como funciona JWT

JWT cuando se hace un register crea un token con el objeto USER, ese token se envía en los headers.

Ejemplos de uso del token:
- Register para obtener el token.
<img src="https://github.com/OscarPortillo/API-JWTAuth/blob/main/docs/imgs/register.PNG?raw=true"/>
- Listar todos los usuarios.
<img src="https://github.com/OscarPortillo/API-JWTAuth/blob/main/docs/imgs/listausuarios.PNG?raw=true"/>
- Mostrar un usuario en concreto
<img src="https://github.com/OscarPortillo/API-JWTAuth/blob/main/docs/imgs/showuser.PNG?raw=true"/>

Api construida siguiendo el siguiente <a href="https://platzi.com/tutoriales/1467-curso-php-laravel/7629-api-rest-en-laravel-8-con-autenticacion-jwt/">tutorial</a>
