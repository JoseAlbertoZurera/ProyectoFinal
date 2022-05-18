<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlojamientosPublicadosController;
use App\Http\Controllers\PublicarAlojamientoController;
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

Route::get('/dashboard/editar-perfil', [UserController::class, 'create'])->name('editarPerfil')->middleware('verified');

Route::get('/alojamientos', function () {
    return view('alojamientos');
})->name('alojamientos');

Route::get('/alojamiento', function () {
    return view('alojamiento');
})->name('alojamiento');

Route::get('/contacto', ContactoController::class)->name('contacto');

Route::get('/cookies', CookiesController::class)->name('cookies');

Route::get('/sobre-nosotros', SobreNosotrosController::class)->name('sobreNosotros');

Route::get('/terminos-y-condiciones', TerminosYCondicionesController::class)->name('terminosYCondiciones');

Route::get('/publicar-alojamiento', PublicarAlojamientoController::class)->name('publicarAlojamiento')->middleware('verified');
Route::post('/publicar-alojamiento', [PublicarAlojamientoController::class, 'store'])->name('publicarAlojamiento.store');


Route::get('/alojamientos-publicados',[AlojamientosPublicadosController::class, 'index'])->name('alojamientosPublicados.index')->middleware('verified');
Route::delete('/alojamientos-publicados{alojamiento}', [AlojamientosPublicadosController::class, 'destroy'])->name('alojamientosPublicados.destroy')->middleware('verified');
