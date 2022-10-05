<?php

declare(strict_types=1);

test('Hola mundo', function () {
    expect(1)->toBe(1);
});

test('Request', function () {
    $this->getJson('laravel-library-boilerplate')
        ->assertOk()
        ->assertSee('Hola mundo');
});
