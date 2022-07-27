<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Database\Accounting;
use App\Models\Inventory;

Route::get('/', function () {
    return Inertia::render('Home', [
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/database', function () {
    return Inertia::render('Database', []);
});

Route::get('/aboutme', function () {
    return Inertia::render('AboutMe');
})->name('aboutme');

// database pages
Route::get('/database', function () {
    return Inertia::render('Database/Database', []);
});
Route::get('/database/accounting', function () {
    return Inertia::render('Database/Accounting/Accounting', []);
});
// Route::resource('/database/accounting/filter', DBAccFilterController::class, [
//     'names' => [
//         'index' => 'database/accouting.index',
//     ]
// ]);
// Route::resource('/database/accounting/detail', DatabaseAccountingDetailController::class);
// Route::resource('/database/accounting/statistic', DatabaseAccountingStatisticController::class);
// Route::resource('/database/accounting/create', DatabaseAccountingCreateController::class);

Route::get('/database/accounting/filter', [Accounting::class, 'filter'])->name('database/accounting.filter');
Route::get('/database/accounting/detail', [Accounting::class, 'detail'])->name('database/accounting.detail');
Route::get('/database/accounting/statistic', [Accounting::class, 'statistic'])->name('database/accounting.statistic');
Route::get('/database/accounting/create', [Accounting::class, 'create'])->name('database/accounting.create');
