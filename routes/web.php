<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DatabaseController;
use App\Models\Inventory;

Route::get('/', function () {
    return Inertia::render('Home', [
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/aboutme', function () {
    return Inertia::render('AboutMe');
})->name('aboutme');

Route::resource('/database', DatabaseController::class);
