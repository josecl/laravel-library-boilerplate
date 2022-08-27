<?php

declare(strict_types=1);

namespace Josecl\LaravelLibraryBoilerplate\Tests;

use Josecl\LaravelLibraryBoilerplate\LaravelLibraryBoilerplateServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            LaravelLibraryBoilerplateServiceProvider::class,
        ];
    }
}
