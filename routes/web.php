<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoLicenciaController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\SexoController;

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

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


/****************************************** TIPO LICENCIA *********************************/
Route::group(['prefix' => 'TipoLicencia'], function () {
    Route::get('/index', [TipoLicenciaController::class, 'index'])->name('TipoLicencia.index');
    Route::get('/show', [TipoLicenciaController::class, 'show'])->name('TipoLicencia.show');
    Route::get('/list', [TipoLicenciaController::class, 'list'])->name('TipoLicencia.list');
    Route::post('/store', [TipoLicenciaController::class, 'store'])->name('TipoLicencia.store');
    Route::delete('/destroy', [TipoLicenciaController::class, 'destroy'])->name('TipoLicencia.destroy');
});

Route::group(['prefix' => 'Especialidad'], function () {
    Route::get('/index', [EspecialidadController::class, 'index'])->name('Especialidad.index');
    Route::get('/show', [EspecialidadController::class, 'show'])->name('Especialidad.show');
    Route::get('/list', [EspecialidadController::class, 'list'])->name('Especialidad.list');
    Route::post('/store', [EspecialidadController::class, 'store'])->name('Especialidad.store');
    Route::delete('/destroy', [EspecialidadController::class, 'destroy'])->name('Especialidad.destroy');
});

Route::group(['prefix' => 'Reparticion'], function () {
    Route::get('/index', [ReparticionController::class, 'index'])->name('Reparticion.index');
    Route::get('/show', [ReparticionController::class, 'show'])->name('Reparticion.show');
    Route::get('/list', [ReparticionController::class, 'list'])->name('Reparticion.list');
    Route::post('/store', [ReparticionController::class, 'store'])->name('Reparticion.store');
    Route::delete('/destroy', [ReparticionController::class, 'destroy'])->name('Reparticion.destroy');
});


//Route::resource('TipoLicencia', TipoLicenciaController::class);
//Route::resource('Especialidad', EspecialidadController::class);
//Route::resource('Reparticion', ReparticionController::class);
