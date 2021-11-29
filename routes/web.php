<?php


/* 
Al final de todo el proyecto proteger todas las rutas con el middleware: auth
*/


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('wel');
})->name('welcome');

Auth::routes();

/* Ruta post para autenticar el formulario cuando uno inicie sesión */
Route::post('validar', [App\Http\Controllers\UsuarioController::class, 'autenticar'])->name('autenticar');

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

/* ruta recurso para crud de usuarios-personal del sistema */
Route::resource('usuarios', App\Http\Controllers\UsuarioController::class)->names('usuarios')->middleware('auth');

/* Ruta para verificar con AJAX si un correo ya existe ó no en el sistema */
Route::post('/register/check', [App\Http\Controllers\UsuarioController::class, 'check'])->name('register.check');

/* Ruta para buscar un paciente por medio de un input */
Route::post('buscar', [App\Http\Controllers\BuscadorPacienteController::class, 'buscar'])->name('buscador');

/* Ruta para ver el historial médico de un paciente por buscadort */
Route::get('paciente_historial_buscador/{id}', [App\Http\Controllers\BuscadorPacienteController::class, 'historialPacienteBuscador'])->name('historial_buscador');

/* Ruta para obtener un historial médico por id basado en la busqueda del buscador */
Route::get('historial_medico/{id}', [App\Http\Controllers\HistorialMedicoController::class, 'show'])->name('historial_paciente');