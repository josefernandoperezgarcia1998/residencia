<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('wel');
})->name('welcome');

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

/* Ruta recurso para el formulario de contacto*/
Route::resource('contacto', App\Http\Controllers\ContactoController::class)->names('contacto');
Route::put('contacto/mensaje/{id}', [App\Http\Controllers\ContactoController::class, 'revisado'])->name('contacto.revisado');
Route::put('contacto/mensaje/{id}/cancelado', [App\Http\Controllers\ContactoController::class, 'cancelado'])->name('contacto.cancelado');