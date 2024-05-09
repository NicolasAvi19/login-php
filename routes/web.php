<?php

use App\Http\Controllers\AuthController;
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

// Ruta principal de la aplicación, protegida por el middleware 'auth'
Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

// Rutas para el inicio de sesión
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// Rutas para el registro
Route::get('/register', [AuthController::class, 'register'])->name('register.form');
Route::post('/register', [AuthController::class, 'store'])->name('register.post');

// Ruta para cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');





