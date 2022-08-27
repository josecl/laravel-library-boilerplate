<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Josecl\LaravelLibraryBoilerplate\Http\Controllers\LaravelLibraryBoilerplateController;

Route::get('/', [LaravelLibraryBoilerplateController::class, 'index']);
