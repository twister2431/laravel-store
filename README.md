<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Store
### Acerca de éste proyecto
Stack de Laravel Jetstream 
- **[Laravel v11.9](https://laravel.com/docs/11.x)**
- **[Laravel Jetstrem](https://laravel.com/docs/8.x/starter-kits#laravel-jetstream)**
- **[Liveware v3.0](https://livewire.laravel.com/docs/quickstart)**

Nota: [Vite](https://laravel.com/docs/10.x/vite#main-content) 

# Dependencias
- PHP **8.2.18**
- Composer **v2**
- NodeJS **v20**
- MySQL **8.0.30**

### Miscelaneos:

1. **Composer** para cambiar de versión se puede ejecutar
 ```
composer self-update --1
composer self-update --2
 ```

2 **Versión de PHP** 
- cambiar a versión 8.2.18


## Contribuir
:+1: :tada: Primero que nada gracias por tomarte el tiempo para contribuir a este proyecto :+1: :tada:
Para contribuir a este proyecto sigue los siguientes pasos:

 ```
 $ git clone 
 $ git checkout -b devTuNombre
 $ git pull origin main
 $ git push origin devTuNombre
 ```
* Clona el proyecto
* Crea tu rama de trabajo `devTuNombre`
* Haz tu contribución
* Baja los últimos cambios en la rama `main`, arregla conflictos si los hay
* Sube tu contribución
* Y haz un pull request a la rama `main` del proyecto.


# Variables de entorno
* Copiar y renombrar el archivo `/.env.example` a `.env`.

### Archivo .env
Aquí se encuentra contenidas algunas variables y configuraciones de vital importancia para que el proyecto funcione.
**Ver las notas al desarrollador**
La variable `APP_KEY` se rellena automáticamente ejecutando el comando:
```
$ php artisan key:generate
```
# Bases de datos
### Configuración y creación de base de datos.
## DB LARAVEL STORE


Puedes crear la base de datos ejecutando el siguiente script:

```sql
DROP DATABASE IF EXISTS dblaravelstore;
CREATE DATABASE dblaravelstore
   CHARACTER SET = 'utf8mb4'
   COLLATE = 'utf8mb4_unicode_ci';
```
o de lo contrario:
#### EN LA RAÍZ DEL PROYECTO SE ENCUENTRA UN RESPALDO DE LA BASE DE DATOS DEL PROYECTO: dblaravelstore.sql

### Configuración de la conexión
```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=YourPort
DB_DATABASE=dblaravelstore
DB_USERNAME=root
DB_PASSWORD=
```

### Composer
Ejecutar
```
composer install
```

### Migraciones con Laravel
Ejecutar los siguientes comandos para aplicar las migraciones e inicializar la base datos.
```
php artisan migrate --seed
```

# Compilar
### Archivos estáticos
$ npm install
$ npm run build

