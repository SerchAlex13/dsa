<?php

use App\Http\Controllers\PrendaController;
use App\Http\Controllers\CompraController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/equipo', [EquipoController::class, 'index']);
// Route::get('/equipo/create', [EquipoController::class, 'create']);
// Route::get('/equipo/{id}', [EquipoController::class, 'show']);

Route::resource('prenda', PrendaController::class);
Route::resource('compra', CompraController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
