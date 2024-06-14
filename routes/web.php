<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoLicenciaController;
<<<<<<< Updated upstream
use App\Http\Controllers\departamentoController;
=======
use App\Http\Controllers\armaController;
>>>>>>> Stashed changes
use App\Http\Controllers\GradoController;
use App\Http\Controllers\SexoController;
<<<<<<< HEAD
use App\Http\Controllers\RolController;
=======
use App\Http\Controllers\PersonaController;
<<<<<<< HEAD
=======
use App\Http\Controllers\TipoArchivoController;
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
>>>>>>> 0dfff27258ac773f74c5e535a1b461fb90f9bea6


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

<<<<<<< HEAD

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
<<<<<<< HEAD
Route::resource('Rol', RolController::class);
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
Route::resource('departamento', departamentoController::class);
 
=======
Route::resource('Persona', PersonaController::class);
=======
Route::resource('TipoLicencia', TipoLicenciaController::class);
Route::resource('Persona', PersonaController::class);
Route::resource('TipoArchivo', TipoArchivoController::class);
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
>>>>>>> 0dfff27258ac773f74c5e535a1b461fb90f9bea6

>>>>>>> f90d9030b15ed1a2e9ccc9d74d966c9106c50a59
=======
Route::resource('Persona', PersonaController::class);

=======
Route::resource('arma', armaController::class);
 
>>>>>>> 5db005e33ebfaa1399669cab54ae8ab894420ee9
>>>>>>> Stashed changes
