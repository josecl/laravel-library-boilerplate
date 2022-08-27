# Boilerplate para proyectos Laravel

## Requerimientos

- Laravel 9
- php 8.0

## Features

- Pest (phpunit)
- php-cs-fixer
- phpstan
- roave/security-advisories
- GitHub actions: tests en Laravel 9 y php 8.0, 8.1. 

## Instalación

```shell
#composer create-project user/example-project path --repository=https://github.com/josecl/laravel-library-boilerplate.git
git clone https://github.com/josecl/laravel-library-boilerplate.git
git remote rm origin
```

Cambiar las referencias, por ejemplo para un proyecto `user/example-project`:

```shell
git remote add origin https://github.com/user/example-project.git
```

## Features

### routes

Se incluye una ruta de ejemplo y un test "Hola mundo".

En caso de no requerir rutas:
 
- Eliminar el archivo `src/routes.php`
- Quitar las referencias de `src/LaravelLibraryBoilerplateServiceProvider.php`.


### config

Se incluye un archivo de configuración y algunas configuraciones de ejemplo.

En caso de no requerir archivo de configuración:

- Eliminar el archivo `config/laravel-library-boilerplate.php`
- Quitar las referencias de `src/LaravelLibraryBoilerplateServiceProvider.php`.


Reemplazar masivamente los strings:

- `laravel-library-boilerplate`: `example-project`
- `LaravelLibraryBoilerplate`: `ExampleProject`
- `LARAVEL_LIBRARY_BOILERPLATE`: `EXAMPLE_PROJECT`

Renombrar los archivos:

- `config/laravel-library-boilerplate.php`: `example-project.php`
- `src/LaravelLibraryBoilerplateServiceProvider.php`: `ExampleProject`
 
Instalar dependencias y probar que todo funcione bien.

```shell
composer install
vendor/bin/pest
```


## Tareas siguientes

- Comprobar licencia: Por defecto utiliza MIT.
