<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\HospedajeController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    /* return route('login'); */
});

Route::redirect('/home', '/', 301);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Route::prefix('admin')->group(function() {
    Route::resource('gestions', GestionController::class);
}); */

Route::middleware(['auth'])->group(function () {
    /* Route::resource('users', UserController::class); */
});

Route::resources([
    'users'         => UserController::class,
    'habitacions'   => HabitacionController::class,
    'promocions'    => PromocionController::class,
    'clientes'      => ClienteController::class,
    'servicios'     => ServicioController::class,
    'reservas'      => ReservaController::class,
    'pagos'         => PagoController::class,
    'hospedajes'    => HospedajeController::class,
]);

Route::get('/buscar', [BusquedaController::class, 'buscarGeneral'])->name('buscar.resultado');

Route::get('/visitas-pdf', [PDFController::class, 'visitasPDF'])->name('visitasPDF');
Route::get('/usuarios-pdf', [PDFController::class, 'usuariosPDF'])->name('usuariosPDF');
Route::get('/estadisticas', [PDFController::class, 'estadisticas'])->name('estadisticas');
