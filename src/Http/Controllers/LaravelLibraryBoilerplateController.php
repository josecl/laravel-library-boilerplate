<?php

declare(strict_types=1);

namespace Josecl\LaravelLibraryBoilerplate\Http\Controllers;

use Illuminate\Http\Request;

class LaravelLibraryBoilerplateController
{
    public function index(Request $request): string
    {
        return 'Hola mundo';
    }
}
