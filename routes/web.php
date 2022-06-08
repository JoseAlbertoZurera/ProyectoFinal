<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlojamientoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\SobreNosotrosController;
use App\Http\Controllers\TerminosYCondicionesController;
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

Auth::routes(['verify' => true]);

Route::get('/', HomeController::class)->name('home');

Route::get('/dashboard', DashboardController::class)->name('dashboard')->middleware('verified');
Route::get('/dashboard/perfil/{user}', [UserController::class, 'index'])->name('perfil.index')->middleware('verified');
Route::get('/dashboard/perfil/{user}/editar', [UserController::class, 'edit'])->name('perfil.edit')->middleware('verified');
Route::put('/dashboard/perfil/{user}/editar', [UserController::class, 'update'])->name('perfil.update')->middleware('verified');
Route::delete('/dashboard/perfil/{user}', [UserController::class, 'destroy'])->name('perfil.destroy')->middleware('verified');

Route::get('/dashboard/alojamientos/{user}', [AlojamientoController::class, 'alojamientosUsuario'])->name('alojamientos.alojamientosUsuario')->middleware('verified');
Route::get('/dashboard/reservas/{user}', [AlojamientoController::class, 'reservasUsuario'])->name('alojamientos.reservasUsuario')->middleware('verified');

Route::get('/alojamientos', AlojamientoController::class)->name('alojamientos');
Route::get('/alojamientos/{ciudad}', [AlojamientoController::class, 'alojamientosCiudad'])->name('alojamientos.alojamientosCiudad');

Route::get('/alojamiento/{id}', [AlojamientoController::class, 'show'])->name('alojamiento.show');

Route::get('/contacto', ContactoController::class)->name('contacto');

Route::get('/cookies', CookiesController::class)->name('cookies');

Route::get('/sobre-nosotros', SobreNosotrosController::class)->name('sobreNosotros');

Route::get('/terminos-y-condiciones', TerminosYCondicionesController::class)->name('terminosYCondiciones');

Route::get('/publicar-alojamiento', [AlojamientoController::class, 'create'])->name('alojamientos.create')->middleware('verified');
Route::post('/publicar-alojamiento', [AlojamientoController::class, 'store'])->name('alojamientos.store')->middleware('verified');

Route::delete('/alojamientos-publicados/{alojamiento}', [AlojamientoController::class, 'destroy'])->name('alojamientos.destroy')->middleware('verified');

Route::post('/reservas/{alojamiento}', [ReservaController::class, 'store'])->name('reservas.store')->middleware('verified');
Route::put('/reservas/{reserva}', [ReservaController::class, 'cancelarReserva'])->name('reservas.cancelarReserva')->middleware('verified');


Route::get('/editarAlojamiento', function () {
    return view('editarAlojamiento');
})->name('editarAlojamiento');