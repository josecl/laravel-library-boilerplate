<?php

declare(strict_types=1);

return [
    /**
     * Habilita las funcionalidades
     */
    'enabled' => env('LARAVEL_LIBRARY_BOILERPLATE_ENABLED', env('APP_DEBUG', false)),

    /**
     * Prefijo para las rutas
     */
    'prefix' => env('LARAVEL_LIBRARY_BOILERPLATE_PREFIX', 'laravel-library-boilerplate'),

    /**
     * Middleware para las rutas de autenticación OAuth.
     */
    'middleware' => [
        'api',
    ],
];
