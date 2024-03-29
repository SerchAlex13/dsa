<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TallaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PrendaController;
use App\Http\Controllers\CarritoController;

use App\Http\Livewire\ShowPrendas;

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
    return view('index');
});

Route::get('/landing', function () {
    return view('landing');
});

// Route::get('/dashboard-prueba', function () {
//     return view('dashboard_prueba');
// });

Route::get('/dashboard-prueba', ShowPrendas::class)->name('dashboard-prueba');

Route::get('/index', function () {
    return view('index');
});

Route::get('/iniciar_sesion', function () {
    return view('interfaces/iniciar_sesion');
});

Route::get('/perfil', function () {
    return view('interfaces/perfil');
});

Route::get('/registro_usuario', function () {
    return view('interfaces/registro_usuario');
});

Route::get('/prenda/correo/{user}/{prenda}', [PrendaController::class, 'notificarNuevaPrenda'])->name('prenda.correo');
Route::get('/prenda/tipo/playeras', [PrendaController::class, 'mostrarPlayeras'])->name('prenda.playeras');
Route::get('/prenda/tipo/shorts', [PrendaController::class, 'mostrarShorts'])->name('prenda.shorts');
Route::get('/prenda/tipo/sombreros', [PrendaController::class, 'mostrarSombreros'])->name('prenda.sombreros');
Route::get('/prenda/tipo/bolsas', [PrendaController::class, 'mostrarBolsas'])->name('prenda.bolsas');
Route::get('/prenda/tipo/mandiles', [PrendaController::class, 'mostrarMandiles'])->name('prenda.mandiles');
Route::get('/prenda/tipo/accesorios', [PrendaController::class, 'mostrarAccesorios'])->name('prenda.accesorios');
Route::get('/pedidos', [PedidoController::class, 'mostrarPedidos']);

Route::get('/descarga/{archivo}', [PrendaController::class, 'descargaArchivo'])->name('descarga');

// Route::get('/equipo', [EquipoController::class, 'index']);
// Route::get('/equipo/create', [EquipoController::class, 'create']);
// Route::get('/equipo/{id}', [EquipoController::class, 'show']);

Route::resource('prenda', PrendaController::class);
Route::resource('compra', CompraController::class);
Route::resource('carrito', CarritoController::class);
Route::resource('talla', TallaController::class);
Route::resource('color', ColorController::class);
Route::resource('user', UserController::class);
Route::resource('pedido', PedidoController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');
});
