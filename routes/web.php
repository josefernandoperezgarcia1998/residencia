<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

/* Ruta al dashboard */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

/* Ruta recurso al controlador de pacientes */
Route::resource('pacientes', App\Http\Controllers\PacienteController::class)->names('pacientes')->middleware('auth');

/* Ruta recurso al controlador de Historial Médico */
Route::resource('historial_medico', App\Http\Controllers\HistorialMedicoController::class)->names('historial_medico')->middleware('auth');
