<?php

declare(strict_types=1);

test('Hola mundo', function () {
    $this->getJson('laravel-library-boilerplate')
        ->assertOk()
        ->assertSee('Hola mundo');
});
