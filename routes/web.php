<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoLicenciaController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\SexoController;
use App\Http\Controllers\PersonaController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


// /****************************************** TIPO LICENCIA *********************************/
// Route::group(['prefix' => 'TipoLicencia'], function () {
//     Route::get('/index', [TipoLicenciaController::class, 'index'])->name('TipoLicencia.index');
//     Route::post('/store', [TipoLicenciaController::class, 'store'])->name('TipoLicencia.store');
//     Route::post('/create', [TipoLicenciaController::class, 'create'])->name('TipoLicencia.create');
//     Route::get('/show/{id}', [TipoLicenciaController::class, 'show'])->name('TipoLicencia.show');
//     Route::get('/update/{id}', [TipoLicenciaController::class, 'update'])->name('TipoLicencia.update');
//     Route::delete('/destroy/{id}', [TipoLicenciaController::class, 'destroy'])->name('TipoLicencia.destroy');
//     Route::delete('/{id}/edit', [TipoLicenciaController::class, 'edit'])->name('TipoLicencia.edit');
// });


Route::resource('TipoLicencia', TipoLicenciaController::class);
Route::resource('Persona', PersonaController::class);

