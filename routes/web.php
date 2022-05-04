<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
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

Route::get('/', HomeController::class)->name('home');

Route::get('/login', LoginController::class)->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');


Route::get('/signup', SignUpController::class)->name('signup');
Route::post('/signup', [LoginController::class, 'store'])->name('login.store');
