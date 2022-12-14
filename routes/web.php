<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\MedicamentoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('paciente/envia-correo/{paciente}', [PacienteController::class, 'enviaCorreo'])->name('paciente.envia-correo');
Route::get('/descarga/{archivo}', [PacienteController::class, 'descargaArchivo'])->name('descarga');
Route::resource('paciente', PacienteController::class)->middleware('auth');
Route::resource('cita', CitaController::class)->middleware('auth');
Route::resource('medicamento', MedicamentoController::class)->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
