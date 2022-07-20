<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\SendController;
use App\Models\Inventory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // dd(Inventory::all()->sortByDesc('updated_at')->first()->updated_at);

    $misc = [];

    if(Inventory::count()>1){
        $misc['totalDBEntries'] = Inventory::count();
        $misc['lastDBUpdate'] = Inventory::orderByDesc('updated_at')->first()->updated_at;
        $misc['lastDBUpdateHuman'] = Inventory::orderByDesc('updated_at')->first()->updated_at->diffForHumans();
    }

    return Inertia::render('Index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'entries' => Inventory::orderByDesc('item')->paginate(15),
        'misc' => $misc,
    ]);
});

Route::resource('/store', SendController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
