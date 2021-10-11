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

/*Ruta para el datatable con AJAX(json) para el ver el historial en el index*/
Route::get('datatableHistorial', [App\Http\Controllers\HistorialMedicoController::class, 'datatableHistorial'])->name('datatableHistorial');

/* Ruta para ver una cita en pdf respecto al id que se seleccione en el index */
Route::get('verCitapdf/{id}',[App\Http\Controllers\ExportarCitaPdfController::class, 'verCitaPdf'])->name('verCita.pdf');

/* Ruta para descargar una cita en pdf respecto al id que se seleccione en el index */
Route::get('exportarCitapdf/{id}',[App\Http\Controllers\ExportarCitaPdfController::class, 'exportarverCitaPdfPdf'])->name('cita.pdf-download');
