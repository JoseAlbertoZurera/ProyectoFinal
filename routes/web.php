<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicarAlojamientoController;
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

Route::get('/alojamientos', function () {
    return view('alojamientos');
})->name('alojamientos');

Route::get('/alojamiento', function () {
    return view('alojamiento');
})->name('alojamiento');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/cookies', function () {
    return view('cookies');
})->name('cookies');

Route::get('/publicarAlojamiento', PublicarAlojamientoController::class)->name('publicarAlojamiento')->middleware('verified');
Route::post('/publicarAlojamiento', [PublicarAlojamientoController::class, 'store'])->name('publicarAlojamiento.store');



Route::get('/editarAlojamiento', function () {
    return view('editarAlojamiento');
})->name('editarAlojamiento');

Route::get('/editarPerfil', function () {
    return view('editarPerfil');
})->name('editarPerfil');

Route::get('/quienes', function () {
    return view('quienes');
})->name('quienes');

Route::get('/condiciones', function () {
    return view('condiciones');
})->name('condiciones');