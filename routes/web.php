<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VueloController;
use App\Http\Controllers\AerolineasController;
use App\Http\Controllers\DestinosController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('vuelos', VueloController::class)->middleware('auth'); //todos los métodos del controlador de vuelos
Route::resource('aerolineas', AerolineasController::class)->middleware('auth'); //todos los métodos del controlador de aerolineas
Route::resource('destinos', DestinosController::class)->middleware('auth');//todos los métodos del controlador de destinos
Auth::routes(['register' => false, 'reset' => false]); //ocultar enlaces de autenticación, registro y recuperar contraseña

Route::get('/home', [VueloController::class, 'index'])->name('home');
